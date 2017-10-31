UPC Checksum Calculator
---

A PHP library for calculating UPC (Universal Product Code) checksum digits.

# Installation

Download and install this library using composer:

    composer require samlittler/upc
    
Alternatively, download this repository as a ZIP and include the src/UPC.php file in your project.

# Usage

Usage is simple

    $your_product_code = '03600024145';
    $checksum = \SamLittler\UPC\UPC::calculate($your_product_code); // returns 7
