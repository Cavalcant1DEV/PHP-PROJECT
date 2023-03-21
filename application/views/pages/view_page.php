<a href="<?= base_url('visualizar/visualizar_conteudos'); ?>"><button class="btn btn-success">Vamos para view</button> </a>

<button class='btn btn-dark' onclick="mostrar();">Mostrar Jquery</button>
<script>
  function mostrar() {
    $.ajax({
      url: "<?= base_url('visualizar/visualizar_conteudos') ?>",
      //endereçamento de nossa função
      type: 'POST',
      //método de acesso GET/POST
      dataType: 'json',
      //estilo de dado recebido
      data: {},
      //esquerda = nome_da_variável, direita = dado
      success: function(data) {
        teste = '';

        if (data != '' && data != null) {
          $.each(data, function(index, value) {//$.each é um foreach do javascript/Jquery
            //primeiro parâmetro da função é o index e o segundo são as linhas do array
            teste += '<tr><th scope="row">' + (index + 1) + '</th><td>' + value.nome + '</td><td>' + value.email + '</td><td>' + value.telefone + '</td><td>' + value.grupo + '</td></tr>';
            //value armazena os valores das linhas e o .alguma_informação determina qual parâmetro buscamos
          });

          $('#informacoes').html('');
          //limpando a view antes de puxar mais informações
          $('#informacoes').append(teste);
        }

        else{
          $('#informacoes').append('Nenhum valor encontrado!');
        }

      },

      error: function(dado) {
        console.log('Deu bronca ai pai');
      },
      //success e error = try/except;
    });
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
    </tr>
  </thead>
  <tbody id='informacoes'>
  </tbody>
</table>