<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class pdf
{
                        
public function __construct()
{
    include_once APPPATH . '/third_party/fpdf/fpdf.php';     
    $pdf = new FPDF();
 $pdf->AddPage();
 
 $CI =& get_instance();
 $CI->fpdf = $pdf;                          
}
                        
                            
}
                                                
/* End of file ekstrak_pdf.php */
    
                        