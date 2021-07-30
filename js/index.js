
function collapseSidebar() {
	body.classList.toggle('sidebar-expand')
}






function seach_cel() { 
    $("#includedContentCell").load("vw_celular.php");
};
function seach_user() { 
    $("#includedContentCell").load("vw_usuario.php");
};
function seach() {  
    $("#includedContentCell").load("vw_historico.php");
   
};  
function btn_cadastro_cell() { 
    $("#includedContentCell").load("cadastro_celular.php");
};
function btn_cadastro_user() { 
    $("#includedContentCell").load("cadastro_usuario.php");
};


function btn_vinculo() {  
    $("#includedContentCell").load("cadastro_vincular.php");
   
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

function btn_deletar_usuario() { 
  alert("Deletado com Sucesso!");
}; 

$(function(){  
    //pesquisar sem refresh
    $("#pesquisa_user").keyup(function() { 
        var pesquisa_user = $(this).val();  
        //verificar se há algo digitado 
        if(pesquisa_user != '' ) {  
            var dados = { 
                
                palavra : pesquisa_user
            }
         
            $.post('busca.php', dados, function(retorna) { 
                $(".resultado").html(retorna);
            }); 
         }else { 
             $(".resultado").html('');
         }
    });  
});
