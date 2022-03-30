<div id="editReplyModal" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="editReplyForm" action="" method="POST">
                @csrf
                @method('patch')
                <div class="form-floating">
                    <textarea name="content" class="form-control reply-in" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                    @if ($errors->updateReply->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->updateReply->all() as $error)
                                    <div id="emailHelp" class="form-text">{{ $error }}</div>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button form="editReplyForm" type="submit" class="btn bg-green">Ubah</button>
        </div>
        </div>
    </div>
    </div>
