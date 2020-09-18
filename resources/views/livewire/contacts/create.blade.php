<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            New Contact
        </div>
    </div>
    <div class="panel-body">
        <div class="form-inline">
            <div class="input-group">
                Name
                <input wire:model="name" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                Phone
                <input wire:model="phone" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                <br>
                <button wire:click="store()" class="btn btn-default">Save</button>
            </div>
        </div>
    </div>
</div>