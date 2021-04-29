<?php
Class Receipt extends CI_Controller{
    
    function __construct() {
        parent::__construct();

        $this->load->model('order_model');
        $this->load->library('pdf');

        // cek_login();
        if (!$this->session->userdata('employee_id')) {
            redirect('admin/auth');
        } else {
			// // cek role
            // if ($this->session->userdata('id_posisi') != "4") {
            //     redirect('auth/blocked');
            // }
        }
    }

    function index(){
        var_dump('ngapain di sini om balik sana !');
        exit;
    }
    
    function print($id_order){

        $pdf = new FPDF('P','mm',array(200,150));;
        // membuat halaman baru​
        $pdf->AddPage();;
        // setting jenis font yang akan digunakan​
        $pdf->SetFont('Arial','B',12);;

        $queryheader = $this->order_model->receipt_get_order_byid($id_order);
        // var_dump($queryheader); exit;

        // Header 
        // ---------------------------------------------------------------------------------------

        $pdf->Cell(130,7,'--------------------------------------------------------------------',0,1,'C');
        $pdf->Cell(130,7,'RM. Pondok Sambal Receipt',0,1,'C');
        $pdf->Cell(130,7,"Order No. ".$queryheader->receipt_no,0,1,'C');
        $pdf->Cell(130,7,'--------------------------------------------------------------------',0,1,'C');
        
        
        
        // Main Page
        // ---------------------------------------------------------------------------------------
        // Memberikan space kebawah agar tidak terlalu rapat​
        
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(130,7,"Cust Name : ".$queryheader->Fname.' '.$queryheader->Lname,0,1,'');
        $pdf->Cell(130,7,"Order Date : ".date_format(date_create($queryheader->order_date),'D, d M Y || h:i:s a'),0,1,'');
        $pdf->Cell(10,7,'',0,2);

        $pdf->Cell(10,6,'Qty',1,0);

        $pdf->Cell(60,6,'Menu Name',1,0);

        $pdf->Cell(30,6,'@',1,0);

        $pdf->Cell(30,6,'Price',1,1);

        $pdf->SetFont('Arial','',10);

        $query1 = $this->order_model->admin_get_order_byid($id_order);
        // var_dump($query1);
        // exit;

        // $query1 = mysqli_query($conn, "SELECT a.order_number, a.order_date, c.menu_name, b.price, b.special_note, b.qty, (b.qty * b.price) as total_item_price
        // from tbl_order a
        // inner join tbl_order_item b on (a.id_order = b.id_order)
        // inner join tbl_menu c on (b.id_menu = c.id_menu)
        // where a.id_order = ".$id_order." ");


        $grand_total = 0;

        foreach ($query1 as $data){

            // var_dump($data); exit;

            $qty = $data->item_qty;
            $menu_name = $data->name;
            $price = $data->sub_total;
            $price_peritem = $data->price_per_item;
            $grand_total += $price;

            $pdf->Cell(10,6,$qty,1,0);
            $pdf->Cell(60,6,$menu_name,1,0);
            $pdf->Cell(30,6,"Rp. ".number_format($price_peritem,2),1,0);
            $pdf->Cell(30,6,"Rp. ".number_format($price,2),1,1);
        }


        $pdf->SetFont('Arial','I',10);
        $tax = $grand_total * 10/100;

        $pdf->Cell(10,6,'#',1,0);
        $pdf->Cell(90,6,'Sub Total',1,0);
        $pdf->Cell(30,6,"Rp. ".number_format($grand_total,2),1,1);

        $pdf->Cell(10,6,'#',1,0);
        $pdf->Cell(90,6,'Tax (10% ppn)',1,0);
        $pdf->Cell(30,6,"Rp. ".number_format($tax,2),1,1);

        $pdf->Cell(130,6,'',1,1);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(10,6,'#',1,0);
        $pdf->Cell(90,6,'Grand Total',1,0);
        $pdf->Cell(30,6,"Rp. ".number_format($grand_total+$tax,2),1,0);


        // Footer 
        // ---------------------------------------------------------------------------------------
        // Position at 1.5 cm from bottom
        $pdf->SetY(-40);

        // Arial italic 8
        $pdf->SetFont('Arial','I',10);

        // Page number
        $pdf->Cell(0,5,'Thank You for Ordering from This Restaurant',0,1,'C');
        $pdf->Cell(0,4,'Please Come Again',0,1,'C');
        $pdf->Image("https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$data->receipt_no."&choe=UTF-8",60,170,30,0,'PNG');


        $pdf->Output();
    }
}