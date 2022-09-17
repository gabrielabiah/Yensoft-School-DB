<!-- He who is contented is rich. - Laozi -->
<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#prompt-modal-{{ $itemID }}">
    <i class="fa fa-trash-o" aria-hidden="true" style="color:white"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="prompt-modal-{{ $itemID }}" tabindex="-1" role="dialog"
    aria-labelledby="prompt-modal-{{ $itemID }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="prompt-modal-{{ $itemID }}">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    wire:click="delete({{ $itemID }})">Yes, delete record</button>
            </div>
        </div>
    </div>
</div>
