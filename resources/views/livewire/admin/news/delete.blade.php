<div>
    <div wire:ignore.self class="modal fade" id="deleteNewsModal" tabindex="-1" aria-labelledby="deleteNewsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteNewsModalLabel"><span class="fas fa-exclamation-circle text-danger" style="font-size: 30px;"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyNews">
                <div class="modal-body">
                    <h4 style="font-weight: 400; font-size: 18px;">Are you sure you want to delete this News?</h4>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Delete Permanently</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
