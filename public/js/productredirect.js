let prodlink = document.getElementById('prodlink').innerHTML

const api_base_url = "https://xffiliate-api.xtendly.com/api";

res = fetch("https://api.ipify.org/?format=json").then((response) =>
    response.json()
);

res.then((user) => {

    let content = {
        url: prodlink,
        ip_address: user.ip

    };

  clickedLink(content)
});

function clickedLink(content)
{
  let response = fetch(api_base_url + "/add-clicked", {
      method: "POST",
      headers: {
          "Content-Type": "application/json;charset=utf-8",
          Accept: "application/jsophp ",
          "Access-Control-Allow-Origin": "*",
          "Access-Control-Allow-Headers": "*"
      },
      body: JSON.stringify(content),
  });

  response.then((result) => result.json())
  .then((data) => window.location.replace(data.link));
}
