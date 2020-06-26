window.onload = function getJson() {

    let Divdata = document.getElementById("data");

    fetch('https://jsonplaceholder.typicode.com/comments')
        .then(
            response => response.json()
        )
        .then(data => {
            console.log(data)
            for (let i = 0; i < data.length; i++) {
                var span1 = document.createElement("span");
                span1.innerText = data[i].name;
                var label1 = document.createElement("label");
                label1.innerText = " nome: ";
                var span2 = document.createElement("span");
                span2.innerText = data[i].email;
                var label2 = document.createElement("label");
                label2.innerText = " email: ";
                var p = document.createElement("p");
                p.innerText = data[i].body;
                var label3 = document.createElement("label");
                label3.innerText = " body: ";
                var div = document.createElement("div");
                div.classList.add("card");
                div.appendChild(label1);
                div.appendChild(span1);
                div.appendChild(label2);
                div.appendChild(span2);
                div.appendChild(label3);
                div.appendChild(p);
                Divdata.appendChild(div);
            }
        })

}

function addPost() {
    let form = document.querySelector(".formulario");
    form.classList.toggle("none")
}

function add() {
    var form = document.getElementById('form');
    var data = {};
    data['nome'] = form.nome.value;
    data['email'] = form.email.value;
    data['body'] = form.body.value;
    alert(data);
    fetch('https://jsonplaceholder.typicode.com/comments', {
            method: 'post',
            body: JSON.stringify(data)
        })
        .then(
            x => {
                if (x.ok) {
                    alert("foi")
                }
            }
        )
}