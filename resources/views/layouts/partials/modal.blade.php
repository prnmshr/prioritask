<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="task-keyword" class="col-form-label"></label>
                        <input type="text" class="form-control" id="task-keyword" placeholder="Task keyword">
                    </div>
                    <div class="mb-3">
                        <label for="task-detail" class="col-form-label"></label>
                        <input type="text" class="form-control" id="task-detail" placeholder="Task detail">
                    </div>
                    <div class="mb-3">
                        <label for="due-date" class="col-form-label"></label>
                        <input type="date" class="form-control" id="due-date" placeholder="Due date">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label"></label>
                        <select type="text" class="form-control" id="recipient-name">
                            <option value="Importan & urgent">Importan & urgent</option>
                            <option value="Importan less urgent">Importan less urgent</option>
                            <option value="Urgent less important">Urgent less important</option>
                            <option value="Not important nor urgent">Not important nor urgent</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer modal-right">
                <button type="button" class="btn btn-green">Create</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
