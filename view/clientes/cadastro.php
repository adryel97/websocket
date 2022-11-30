<?php
$this->layout('_template');
?>
<div class="card border-0 shadow-sm rounded-4 p-4">
    <div class="card-body">
        <h4 class="card-title">Cadastrar Cliente</h4>
        <form id="form-cliente" enctype='multipart/form-data' class="mt-4 row row-cols-2" action="<?=url('create/cliente')?>">
            <div class="col">
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control" name="nome" id="nome" placeholder="Nome">
                  <label for="nome">Name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                  <input
                    type="number"
                    class="form-control" name="idade" id="idade" placeholder="Idade">
                  <label for="idade">Idade</label>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Button</button>
            </div>
        </form>
    </div>
    <ul class="list-group">
      <?php 
      foreach ($clientes as $cliente):
        ?>
        <li class="list-group-item"><?=$cliente['nome']?></li>
      <?php
      endforeach;
      ?>
    </ul>
</div>
<?php $this->start('js') ?>
<script>
    var conn = new WebSocket('ws://localhost:8081');
    conn.onopen = function(e) {
        console.log("Connection established!");
        $('#form-cliente').submit(function (e) { 
          e.preventDefault();
          $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json",
            success: function (data) {
              conn.send(JSON.stringify(data));
              $('.list-group').empty();
              $.each(data, function (index, value) {
                 $('.list-group').append(`
                    <li class="list-group-item">${value.nome}</li>
                 `);
              });
            }
          });
        });
    };

    conn.onmessage = function(e) {
        response = JSON.parse(e.data);
        $('.list-group').empty();
        $.each(response, function (index, value) { 
             $('.list-group').append(`
              <li class="list-group-item">${value.nome}</li>
             `);
          });
    };
</script>
<?php $this->end('js') ?>