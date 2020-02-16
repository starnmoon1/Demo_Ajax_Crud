<div class="row col-12 mt-4">
    <div class="card col-12">
        <div class="card-body">

            <a href="index.php?page=add" class="btn btn-primary nav-item active">Thêm ghi chú mới</a>
            <h3 class="card-title text-center">Các ghi chú</h3>

            <div class="card-title ">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <form class="col-7" action="">

                        </form>

                        <form class="form-inline my-2 my-lg-0" method="GET"
                              action="">
                            <input class=" form-control mr-sm-2" type="search" placeholder="Title" aria-label="Search" name="keyword">
                            <input class="btn btn-outline-success my-sm-0" type="submit" value="Search">
                        </form>
                    </div>
                </nav>

            </div>

            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Note Type</th>
                    <th></th>
                </tr>
                </thead>
              @foreach($notes as $key => $note)
                <tr>
                    <td>{{$key++}}</td>
                    <td>

                    </td>
                    <td><?php echo $note->getTypeId(); ?></td>
                    <td>
                        <a href="index.php?page=edit&id=<?php echo $note->getNoteId(); ?>" class="btn btn-success"
                           onclick="return confirm('bạn có chắn chắn sửa thông tin của ghi chú này ?')">Edit</a>
                        <a href="index.php?page=delete&id=<?php echo $note->getNoteId(); ?>" class="btn btn-danger"
                           onclick="return confirm('bạn có chắc chắn muốn xóa ghi chú này ?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
