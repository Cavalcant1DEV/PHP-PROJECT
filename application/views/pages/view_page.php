<a href="<?= base_url('visualizar/visualizar_conteudos'); ?>"><button class="btn btn-success">Vamos para view</button> </a>

<button class='btn btn-dark' onclick="mostrar();">Mostrar Jquery</button>
<script>
  // $(document).ready(function() {
  //   console.log('tem algo dando certo só não sei oq');
  //   mostrar();
  // });

  function mostrar() {
    $.ajax({
      url: "<?= base_url('visualizar/visualizar_conteudos') ?>",
      //endereçamento de nossa função
      type: 'POST',
      //método de acesso GET/POST
      dataType: 'json',
      //estilo de dado recebido
      data: {},
      //esquerda = nome_da_variável:direita = dado
      success: function(data) {
        teste = '';

        if (data != '' && data != null) {



          $.each(data, function(index, value) { //$.each é um foreach do javascript/Jquery
            //primeiro parâmetro da função é o index e o segundo são as linhas do array
            teste += '<tr><th scope="row">' + (index + 1) + '</th><td>' + value.nome + '</td><td>' + value.email + '</td><td>' + value.telefone + '</td><td>' + value.grupo + '</td><td><button type="button" class="btn btn-outline-danger" onclick="deletar(' + value.id + ');"><i class="bi bi-recycle"></i></button></td>' + '<td><a href="<?=base_url("editando/load_page_editar")?>/'+value.id+'"><button type="button" class="btn btn-outline-danger"><i class="bi bi-pencil-square"></i></button></a></td></tr>';
            //value armazena os valores das linhas e o .alguma_informação determina qual parâmetro buscamos
          });

          $('#informacoes').html('');
          //limpando a view antes de puxar mais informações
          $('#informacoes').append(teste);
        } else {
          $('#informacoes').html('');
          $('#informacoes').append('Nenhum valor encontrado!');
        }

      },

      error: function(dado) {
        console.log('Deu bronca ai pai');
      },
      //success e error = try/except;
    });
  }

  function deletar(id) {
    $.ajax({
      url: "<?= base_url('remover/deletar') ?>",
      type: 'POST',
      dataType: 'json',
      data: {
        id: id
      },
      success: function(data) {

      $('#informacoes').html('');
      mostrar();
      },
      error: function(data) {
        console.log('deu errado');
      }
    })
  }

</script>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Grupo</th>
      <th scope="col">Deletar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody id='informacoes'>
  </tbody>
</table>