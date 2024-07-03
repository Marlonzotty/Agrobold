<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Clientes</h1>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#createModal">Adicionar Cliente</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome 2</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td><?php echo $cliente['telefone']; ?></td>
                        <td><?php echo $cliente['estado']; ?></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="<?php echo $cliente['id']; ?>" data-nome="<?php echo $cliente['nome']; ?>" data-email="<?php echo $cliente['email']; ?>" data-telefone="<?php echo $cliente['telefone']; ?>" data-estado="<?php echo $cliente['estado']; ?>">Editar</button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $cliente['id']; ?>">Excluir</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modals -->
    <?php include  'C:\Users\Pichau\Desktop\Projetos\desafio agrobold\app\views\clientes\modals.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        // Populate edit modal with current data
        $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nome = button.data('nome');
            var email = button.data('email');
            var telefone = button.data('telefone');
            var estado = button.data('estado');
            
            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #nome').val(nome);
            modal.find('.modal-body #email').val(email);
            modal.find('.modal-body #telefone').val(telefone);
            modal.find('.modal-body #estado').val(estado);
        });

        // Populate delete modal with current data
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            
            var modal = $(this);
            modal.find('.modal-body #id').val(id);
        });
    </script>
</body>
</html>
