<?php
if (!current_user_can('administrator')) {
    echo 'You do not have sufficient permissions to access this page.';
    die;
}

$current_user = wp_get_current_user();
$username = $current_user->user_login;

if (!in_array($username, ['cybertrace', 'farazahmad759'])) {
    echo 'You do not have sufficient permissions to access this page.';
    die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Chart API</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <button class="btn btn-primary refresh-btn">Refresh</button>
        <div class="crypto-prices">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.2/axios.min.js" integrity="sha512-NCiXRSV460cHD9ClGDrTbTaw0muWUBf/zB/yLzJavRsPNUl9ODkUVmUHsZtKu17XknhsGlmyVoJxLg/ZQQEeGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const cryptos = ["btc", "usdt"];
        fetchPrices(cryptos);

        $(".refresh-btn").on('click', function() {
            const cryptos = ["btc", "usdt"];
            fetchPrices(cryptos);
        });


        async function fetchPrices(cryptos) {
            $(".crypto-prices").empty();
            let results = [];

            for (const crypto of cryptos) {
                let exmoPriceUSD = {
                    buy_price: 'N/A',
                    sell_price: 'N/A',
                    last_trade: 'N/A',
                    updated: 'N/A'
                };
                let exmoPriceEUR = {
                    buy_price: 'N/A',
                    sell_price: 'N/A',
                    last_trade: 'N/A',
                    updated: 'N/A'
                };
                let exmoPriceAUD = {
                    buy_price: 'N/A',
                    sell_price: 'N/A',
                    last_trade: 'N/A',
                    updated: 'N/A'
                };

                let geminiPriceUSD = {
                    buy_price: 'N/A',
                    sell_price: 'N/A',
                    last_trade: 'N/A',
                    updated: 'N/A'
                };
                let geminiPriceEUR = {
                    buy_price: 'N/A',
                    sell_price: 'N/A',
                    last_trade: 'N/A',
                    updated: 'N/A'
                };
                let geminiPriceAUD = {
                    buy_price: 'N/A',
                    sell_price: 'N/A',
                    last_trade: 'N/A',
                    updated: 'N/A'
                };
                try {
                    // Fetch crypto price from Exmo
                    const exmoResponse = await axios.get(`https://api.exmo.com/v1/ticker`);
                    if (exmoResponse.data[`${crypto.toUpperCase()}_USD`]) {
                        exmoPriceUSD = {
                            buy_price: exmoResponse.data[`${crypto.toUpperCase()}_USD`].buy_price,
                            sell_price: exmoResponse.data[`${crypto.toUpperCase()}_USD`].sell_price,
                            last_trade: exmoResponse.data[`${crypto.toUpperCase()}_USD`].last_trade,
                            updated: exmoResponse.data[`${crypto.toUpperCase()}_USD`].updated,
                        }
                    }
                    if (exmoResponse.data[`${crypto.toUpperCase()}_EUR`]) {
                        exmoPriceEUR = {
                            buy_price: exmoResponse.data[`${crypto.toUpperCase()}_EUR`].buy_price,
                            sell_price: exmoResponse.data[`${crypto.toUpperCase()}_EUR`].sell_price,
                            last_trade: exmoResponse.data[`${crypto.toUpperCase()}_EUR`].last_trade,
                            updated: exmoResponse.data[`${crypto.toUpperCase()}_EUR`].updated,
                        }
                    }
                    if (exmoResponse.data[`${crypto.toUpperCase()}_AUD`]) {
                        exmoPriceAUD = {
                            buy_price: exmoResponse.data[`${crypto.toUpperCase()}_AUD`].buy_price,
                            sell_price: exmoResponse.data[`${crypto.toUpperCase()}_AUD`].sell_price,
                            last_trade: exmoResponse.data[`${crypto.toUpperCase()}_AUD`].last_trade,
                            updated: exmoResponse.data[`${crypto.toUpperCase()}_AUD`].updated,
                        }
                    }
                } catch (error) {
                    console.error(`An error occurred while fetching data for ${crypto}: ${error.message}`);
                }

                // Fetch crypto price from Gemini
                try {
                    const geminiResponse = await axios.get(`https://api.gemini.com/v1/pubticker/${crypto.toLowerCase()}usd`);
                    geminiPriceUSD = {
                        buy_price: geminiResponse.data.bid,
                        sell_price: geminiResponse.data.ask,
                        last_trade: geminiResponse.data.last,
                        updated: geminiResponse.data.volume.timestamp,
                    };
                } catch (error) {
                    console.error(`An error occurred while fetching data for ${crypto}: ${error.message}`);
                }

                try {
                    const geminiResponse2 = await axios.get(`https://api.gemini.com/v1/pubticker/${crypto.toLowerCase()}eur`);
                    geminiPriceEUR = {
                        buy_price: geminiResponse2.data.bid,
                        sell_price: geminiResponse2.data.ask,
                        last_trade: geminiResponse2.data.last,
                        updated: geminiResponse2.data.volume.timestamp,
                    };
                } catch (error) {
                    console.error(`An error occurred while fetching data for ${crypto}: ${error.message}`);
                }

                try {
                    const geminiResponse3 = await axios.get(`https://api.gemini.com/v1/pubticker/${crypto.toLowerCase()}aud`);
                    geminiPriceAUD = {
                        buy_price: geminiResponse3.data.bid,
                        sell_price: geminiResponse3.data.ask,
                        last_trade: geminiResponse3.data.last,
                        updated: geminiResponse3.data.volume.timestamp,
                    };
                } catch (error) {
                    console.error(`An error occurred while fetching data for ${crypto}: ${error.message}`);
                }

                // Add results to the array
                results.push({
                    crypto,
                    exmo: {
                        USD: exmoPriceUSD,
                        EUR: exmoPriceEUR,
                        AUD: exmoPriceAUD,
                    },
                    gemini: {
                        USD: geminiPriceUSD,
                        EUR: geminiPriceEUR,
                        AUD: geminiPriceAUD,
                    },
                });
            }

            results.forEach(data => {
                $(".crypto-prices").append(displayPriceData(data));
            });

            return results;
        }

        function displayPriceData(data) {
            let currencies = ['USD', 'EUR', 'AUD'];
            let html = `
            <div class="crypto-price">
                <h3>${data.crypto.toUpperCase()}</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col"></th>
                            <th class="col">Exmo</th>
                            <th class="col">Gemini</th>
                        </tr>
                    </thead>
                    <tbody>
                    `;

            currencies.forEach(currency => {
                data.exmo[currency].updated = convertTimestamp(data.exmo[currency].updated);
                data.gemini[currency].updated = convertTimestamp(data.gemini[currency].updated);
                html += `
                <tr>
                    <th style="width:20%">${currency}</th>`;

                if (data.exmo[currency].buy_price == 'N/A') {
                    html += `<td style="width:40%;"></td>`;
                } else {
                    html +=
                        `
                    <td style="width:40%">
                        <div><span class="text-success font-weight-bold">BUY:</span> ${data.exmo[currency].buy_price}</div>
                        <div><span class="text-danger font-weight-bold">SELL:</span> ${data.exmo[currency].sell_price}</div>
                        <div><span class="text-primary font-weight-bold">LAST:</span> ${data.exmo[currency].last_trade}</div>
                        <div><span class="text-secondary text-sm">UPDATED:</span> ${data.exmo[currency].updated}</div>
                    </td>`;
                }

                if (data.gemini[currency].buy_price == 'N/A') {
                    html += `<td style="width:40%;"></td>`;
                } else {
                    html +=
                        `
                    <td style="width:40%">
                        <div><span class="text-success font-weight-bold">BUY:</span> ${data.gemini[currency].buy_price}</div>
                        <div><span class="text-danger font-weight-bold">SELL:</span> ${data.gemini[currency].sell_price}</div>
                        <div><span class="text-primary font-weight-bold">LAST:</span> ${data.gemini[currency].last_trade}</div>
                        <div><span class="text-secondary text-sm">UPDATED:</span> ${data.gemini[currency].updated}</div>                    
                    </td>`;
                }
                html +=
                    `
                    </tr>
                    `;
            });

            html += `
                    </tbody>
                </table>
            </div>
            `;

            return html;
        }

        function convertTimestamp(timestamp) {
            if (!Number.isInteger(timestamp)) {
                return 'N/A';
            }
            var date = new Date(timestamp * 1000);
            var year = date.getFullYear();
            var month = ("0" + (date.getMonth() + 1)).slice(-2);
            var day = ("0" + date.getDate()).slice(-2);
            var hours = ("0" + date.getHours()).slice(-2);
            var minutes = ("0" + date.getMinutes()).slice(-2);
            var seconds = ("0" + date.getSeconds()).slice(-2);
            return year + "-" + month + "-" + day + " " + hours + ":" + minutes + ":" + seconds;
        }
    </script>
</body>

</html>