<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="keyword" class="col-form-label"></label>
                        <input type="text" class="form-control" id="keyword" name="keyword"
                            placeholder="Task keyword">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="col-form-label"></label>
                        <input type="text" class="form-control" id="detail" name="detail"
                            placeholder="Task detail">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="col-form-label"></label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="Due date">
                    </div>
                    <div class="mb-3">
                        <label for="quadrant" class="col-form-label"></label>
                        <select class="form-control" id="quadrant" name="quadrant">
                            <option value="Important & urgent">Important & urgent</option>
                            <option value="Important less urgent">Important less urgent</option>
                            <option value="Urgent less important">Urgent less important</option>
                            <option value="Not important nor urgent">Not important nor urgent</option>
                        </select>
                    </div>

                    <div class="modal-footer modal-right pb-4">
                        <button type="submit" class="btn btn-green">Create</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
