class Principal {
    constructor() {

    }

    linkPrincipal(link) {
        let url = "";
        let cadena = link.split("/");
        for (let i = 0; i < cadena.length; i++) {
            if (i >= 1) {
                url += cadena[i];
            }
        }

        switch (url) {
            case "":
                break;
            case "principal":
                Listar();
                break;
            case "index":
                Listar();
                break;
        
            default:
                break;
        }
    }
    
}