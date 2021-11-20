> ### An API endpoint for a 3rd Party User that takes one input and returns the Square root of the Value

---

### Built With:

-   Laravel
-   Git
-   Heroku

---

### Endpoint details:

-   Send a POST request to `https://secure-headland-53675.herokuapp.com/api/square_root`, using `input` as the field name in the body of the request. e.g.

~CURL

```cURL
curl --location --request POST 'http://127.0.0.1:8001/api/square_root' \
--form 'input="36"'
```

~JavaScriipt

```JavaScript
var formdata = new FormData();
formdata.append("input", "36");

var requestOptions = {
  method: 'POST',
  body: formdata,
  redirect: 'follow'
};

fetch("http://127.0.0.1:8001/api/square_root", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
```

### By:

[Taofeek Abiodun Olalere](https://linnkedin.com/in/olaleretaofeek)
