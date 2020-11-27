class Index{
    constructor(){

    }

    Listar(){
        $.post(
            URL + "index/Listar",{},
            (response)=>{
                console.log(response);
            }
        )
    }
}