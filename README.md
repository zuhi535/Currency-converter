# Currency Converter Webpage

This repository contains a simple **Currency Converter Webpage** that allows users to convert between different currencies using live exchange rates. The webpage uses a mix of HTML, CSS, and PHP to provide real-time currency conversion. The backend PHP code calculates the converted amount based on pre-defined exchange rates, while the frontend offers a clean, user-friendly interface with a live ticker and currency chart.

## Features

- **Currency Selection**: Choose the source and target currencies from a list of supported currencies (e.g., PHP, CAD, USD, EUR, GBP, JPY, etc.).
- **Conversion Logic**: The PHP backend dynamically calculates the converted amount based on the selected currencies and the entered amount.
- **Live Ticker**: The webpage displays a live ticker showing the current exchange rates for various currencies.
- **Currency Conversion Chart**: An embedded widget shows a real-time chart of the currency pair conversion (e.g., GBP to EUR).
- **Responsive Design**: The webpage is designed to be responsive, ensuring it works well across different screen sizes.

## Technologies Used

- **HTML5** for the page structure and user interface.
- **CSS3** for styling the page with a responsive and modern design.
- **PHP** for backend functionality and currency conversion logic.
- **JavaScript** (injected via iframes) to display live exchange rate tickers and charts.

## How It Works

The currency converter performs the following steps:

1. The user selects the source and target currencies from dropdown menus.
2. The user enters an amount to convert in the input field.
3. Upon submitting the form, the PHP backend fetches the appropriate exchange rates for the selected currencies.
4. The backend calculates the converted amount and displays it to the user.
5. Additionally, the page includes an embedded live exchange rate ticker and a currency conversion chart for better user experience.

### Example Code for Conversion Logic

The PHP backend code uses predefined arrays of exchange rates for various currencies. Here is a sample code that calculates the conversion based on the selected currencies:

```php
// Sample exchange rate arrays (exchange rate data can be dynamically fetched)
$php = array("1", "0.026219", "0.159988", "2.187584", "0.016424963", ...);
$cad = array("38.148506", "1", "6.104467", "83.556541", ...);

// Convert amount based on selected currencies
$amount = $_POST['txtAmount'];
$from_currency = $_POST['txtSelectBox1'];
$to_currency = $_POST['txtSelectBox2'];
$conversion_rate = $php[$from_currency] * $cad[$to_currency];
$converted_amount = $amount * $conversion_rate;
```

## How to Set Up the Project Locally

How to Set Up the Project Locally
To get this project up and running on your local machine, follow these steps:

Prerequisites
- PHP server environment (e.g., XAMPP, WAMP, or LAMP)
- Basic knowledge of how to run PHP applications locally
### Setup Instructions
1. Clone the repository:
```bash
git clone https://github.com/yourusername/Currency-converter.git
```
2. Move the files to your server’s root directory. If you're using XAMPP, this is typically the htdocs folder.

3. Start the PHP server. For example, if you're using XAMPP, launch Apache and MySQL from the XAMPP control panel.

4. Open your browser and go to http://localhost/Currency-converter to see the page in action.
