

function collapseSidebar() {
	body.classList.toggle('sidebar-expand')
}

window.onclick = function(event) {
	openCloseDropdown(event)
}

function seach_cel() { 
    $(document).ready(function() {
        $("input[type=button]").click(function(event) {
            $("#conteudo").load('cadastro_celular.html',aviso());
        });
    });
};


function seach_cel() { 
    $("#includedContentCell").load("pesquisar_celular.html");
};
function seach_user() { 
    $("#includedContentCell").load("pesquisar_usuario.html");
};
function btn_cadastro_cell() { 
    $("#includedContentCell").load("cadastro_celular.html");
};
function btn_cadastro_user() { 
    $("#includedContentCell").load("cadastro_usuario.html");
};

function seach() {  
    $("#includedContentCell").load("listagem.html");
   
};  

function btn_vinculo() {  
    $("#includedContentCell").load("vincular.html");
   
}; 

/*function btn_vinculo() { 
    $('#container-vinculo').show();
    $('#container-seach').hide();
    $('#container-user').hide(); 
    $('#container-cell').hide();  
}; */

function record_cell() { 
    alert("Celular Gravado!");
}; 

function cancelar_cell() { 
    alert("Cancelado!");
}; 

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
