function clickButton() {
    var keyword = document.getElementById('keyword');
    var elem = document.getElementById('get-products');
    var params = "key=" + keyword.value;
    var token = document.getElementsByName('_token')[0].value;
    elem.addEventListener('click', function (e) {
        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/admin/ajax/getaliproducts', true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.setRequestHeader('X-CSRF-TOKEN', token);
        xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");

        xhr.send(params);

        xhr.onreadystatechange = function() {
            if (this.readyState != 4) return;

            // по окончании запроса доступны:
            // status, statusText
            // responseText, responseXML (при content-type: text/xml)

            if (this.status != 200) {
                // обработать ошибку
                alert( 'ошибка: ' + (this.status ? this.statusText : 'запрос не удался') );
                return;
            }

            // получить результат из this.responseText или this.responseXML
            alert(xhr.responseText);
        }
    })
}

clickButton();