<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            New Contact
        </div>
    </div>

    <div class="panel-body">
        <div class="form-inline">
            <input type="hidden" wire:model="selected_id">
            <div class="form-group">
                Name
                <input wire:model="name" type="text" class="form-control input-sm">
            </div>
            <div class="form-group">
                Phone
                <input wire:model="phone" type="text" class="form-control input-sm">
            </div>
            <div class="form-group">
                <br>
                <button wire:click="update()" class="btn btn-default">Update</button>
            </div>
        </div>
    </div>

</div>