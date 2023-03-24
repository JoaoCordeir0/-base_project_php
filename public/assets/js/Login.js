const loginValidate = () => {    
    $.ajax({
        url: 'apiPOST',
        type: 'POST',
        dataType: 'json',
        data: {
            apiName: 'teste',
            value: 1
        },
    }).done(function(json) {
        console.log('Deu certo')
    });
}