const api_url = "https://kryx-app-web-api.azurewebsites.net/api/v1/stats/price/KXA";

async function getPrice(url) {

    const response = await fetch(url);

    var data = await response.json();
    show(data);
}

getPrice(api_url)

function show(data) {
    document.getElementById("kxa-marketcap").innerHTML = formatCurrency(marketCap(data.price, 62000000));
}

function marketCap(price, supply) {
    return supply * price
}

function formatCurrency(num) {
    const formatConfig = {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 0,
      maximumFractionDigits: 0,
      currencyDisplay: 'symbol',
    }
    const curFormatter = new Intl.NumberFormat('en-US', formatConfig)
  
    return curFormatter.format(num)
  }