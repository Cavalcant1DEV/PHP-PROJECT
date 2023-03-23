<div>
    <form action="<?php echo base_url('editando/editar');?>" method="POST">
    <div class="form-row">
        <input type="hidden" value="<?=$id?>" name="id">
        <div class="form-group col-md-5">
        <label for="inputEmail4">Nome</label>
        <input type="text" class="form-control" placeholder="Nome" name="nome">
        </div>

        <div class="form-group col-md-5">
        <label for="inputPassword4">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
    </div>
    <div class="form-group col-md-5">
        <label for="inputAddress">Telefone</label>
        <input type="tel" class="form-control" placeholder="(00) 00000-0000" name="telefone">
    </div>

    <div class="form-row">
        <div class="form-group col-md-5">
        <label for="inputEstado">Grupo</label>
        <select class="form-control" name="grupo">
            <option selected>Escolher...</option>
            <option value="Solteiro(a)">Solteiro(a)</option>
            <option value="Casado(a)">Casado(a)</option>
            <option value="Viúvo(a)">Viúvo(a)</option>
        </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" style="margin-top: 1em">Atualizar</button>
    </form>
</div>