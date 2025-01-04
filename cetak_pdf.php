<?php
require 'lib/fpdf.php'; // Pastikan Anda sudah menaruh library FPDF di folder "lib"
include 'koneksi.php';   // Koneksi ke database

class PDF extends FPDF
{
    // Header
    function Header()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Laporan Inventory', 0, 1, 'C');
        $this->Ln(10);
    }

    // Footer
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Membuat PDF
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Header Tabel
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 10, 'No', 1);
$pdf->Cell(30, 10, 'Kode Barang', 1);
$pdf->Cell(50, 10, 'Nama Barang', 1);
$pdf->Cell(40, 10, 'Kategori', 1);
$pdf->Cell(20, 10, 'Jumlah', 1);
$pdf->Cell(40, 10, 'Lokasi', 1);
$pdf->Ln();

// Ambil data dari database
$result = $conn->query("SELECT * FROM barang");
$no = 1;
$pdf->SetFont('Arial', '', 12);
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(10, 10, $no, 1);
    $pdf->Cell(30, 10, $row['kode_barang'], 1);
    $pdf->Cell(50, 10, $row['nama_barang'], 1);
    $pdf->Cell(40, 10, $row['kategori'], 1);
    $pdf->Cell(20, 10, $row['jumlah'], 1);
    $pdf->Cell(40, 10, $row['lokasi'], 1);
    $pdf->Ln();
    $no++;
}

// Output PDF
$pdf->Output('D', 'Laporan_Inventory.pdf');
?>
