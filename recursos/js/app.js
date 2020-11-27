var index = new Index();

var Listar = () => {
    index.Listar();
}
var principal = new Principal();

$().ready(() => {
    let URLactual = window.location.pathname;
    principal.linkPrincipal(URLactual);
});
