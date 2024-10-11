<div class="modal" id="transport-modal" style="display:none">
    <form id="getVehicleLocationForm" action="/vehicle-location" method="GET">
        @csrf
        <label for="routeId">Select route: </label>
        <select id="routeId" name="routeId" >
            <option value="T815">T815</option>
            <option value="T816">T816</option>
        </select>
        <button type="submit" id="get_vehicle_location_btn">Search</button>
    </form>

    <div id="vehicle_details" style="display:none;">
        <div>License plate: <span id="vehicle_license_plate">license_plate</span></div>
        <div>Location: <span id="vehicle_location">location</span></div>
    </div>
</div>