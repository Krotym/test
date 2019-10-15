/**
 * Created by User on 05.03.2018.
 */
var db ={};

var idProduct ={};
var url={};
var name={};
var price={};
var text={};
var image={};
var table={};
var Tab={};
var tableObj = document.createElement('table');
var Table={};
var checkEnter;
var f={};
var Id={};
var j={};
var chek;

    function previewFile(){
        var preview = document.querySelector('img'); //selects the query named img
        var file    = document.querySelector('input[type=file]').files[0]; //sames as here
    var reader  = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file); //reads the data as a URL
    } else {
        preview.src = "";
    }
}

function addProduct()
{

    if (idProduct == 0)
    {
        idProduct++;
    }
    else
    {
        if (chek == true)
        {
            j=idProduct;
        }
        else
        {
            j=JSON.parse(localStorage.getItem("id"));
        }

        idProduct= j;
        idProduct++;
        table=JSON.parse(localStorage.getItem("tab"))
    }

    image =  window.document.img.src ;
    name =document.getElementById("name").value;
    text = document.getElementById("text").value;
    price = document.getElementById("price").value;
    url = idProduct + name;// +category

    if ((name && text && price) == '')
    {
        alert("Ваша форма введина неправильна");

        idProduct--;

    }
    else {
        checkEnter = confirm('Вы ввели :  ' + name + ' ' + text + ' ' + price + ' ' + url);
        if (checkEnter == false)
        {

            idProduct--;


        }
        else
        {
            table += '<tr><td>' + idProduct + '</td><td>' + name + '</td><td>'+ text + '</td><td>'+ price + '</td><td>'+ url+ '</td><td>'+ image + '</td></tr>';

            db = '<tr><td>' + idProduct + '</td><td>' + name + '</td><td>'+ text + '</td><td>'+ price + '</td><td>'+ url+ '</td><td>'+ image + '</td></tr>';
        }
    }
    // db  = idProduct+ ' ' + name + ' ' + text + ' ' + price + ' ' + url+ ' ' + image ;


    Id=JSON.stringify(idProduct);

    localStorage["id"]=Id;

    f = db.length;
    //alert(f);

    showTable();

    // localStorage.clear()
    // location.reload()
}

function showTable()
{

    Table=JSON.stringify(table);

    localStorage["tab"]=Table;

    Tab = JSON.parse(localStorage.getItem("tab"));


    tableObj.style.width = '100%';
    var tableHTML = '<tr><td style="width: 20%; padding-bottom: 10px;">index</td><td style="padding-bottom: 10px;">name</td><td style=" padding-bottom: 10px;">text</td><td style=" padding-bottom: 10px;">price</td><td style=" padding-bottom: 10px;">url</td><td style="padding-bottom: 10px;">image</td></tr>';

    for ( var i = 0; i <1 ; i++)
    {
        tableHTML += Tab;
    }

    tableObj.innerHTML = tableHTML;
    document.body.appendChild(tableObj);

  //  var message = encodeURIComponent(Tab);
   // location.href="/cms0.0.1/bd.php?Tab"+message;




}
function del()
{
    if (j>=0)
    {
        checkEnter = confirm('delete   ');
        if (checkEnter == true)
        {


            table =table.substr(0,table.length - f);
            idProduct = j--;
            chek=checkEnter;
        }

    }

    showTable();

    //  localStorage.removeItem("tab")
    //  localStorage.removeItem("id")
}
