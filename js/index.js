

function collapseSidebar() {
	body.classList.toggle('sidebar-expand')
}






function seach_cel() { 
    $("#includedContentCell").load("pesquisar_celular.php");
};
function seach_user() { 
    $("#includedContentCell").load("pesquisar_usuario.php");
};
function btn_cadastro_cell() { 
    $("#includedContentCell").load("cadastro_celular.php");
};
function btn_cadastro_user() { 
    $("#includedContentCell").load("cadastro_usuario.php");
};

function seach() {  
    $("#includedContentCell").load("listagem.php");
   
};  

function btn_vinculo() {  
    $("#includedContentCell").load("vincular.php");
   
};   


/*function btn_vinculo() { 
    $('#container-vinculo').show();
    $('#container-seach').hide();
    $('#container-user').hide(); 
    $('#container-cell').hide();  
}; */



function record_user() { 
    alert("Usuário Gravado!");
}; 

function cancelar_user() { 
    alert("Cancelado!");
}; 

function pesquisar_vinculo() { 
    alert("Gerando Lista....");
}; 
function view_all() { 
    alert("Aguarde um instante...");
}; 
