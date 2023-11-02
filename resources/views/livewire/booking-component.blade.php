<div class="col-sm-5 col-md-4">
    <h3>Reservation</h3>
    <form role="form" class="wowload fadeInRight" action="{{ route('search-room', ['category' => $category, 'room_number' => $room_number]) }}">
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12">
                    <label>Category</label>
                    <select class="form-control" wire:model="category">
                        @foreach ($categorias as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-6">
                    <label>Number of rooms</label>
                    <select class="form-control" wire:model="room_number">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-xs-6">
                    <label>Capacity</label>
                    <select class="form-control" wire:model="capacity">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-6">
                    <label>Start Date</label>
                    <input type="date" wire:model="start_date" id="start-date" class="form-control"
                        placeholder="Start date">
                </div>
                <div class="col-xs-6">
                    <label>End Date</label>
                    <input type="date" wire:model="end_date" id="end-date" class="form-control"
                        placeholder="End date">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>