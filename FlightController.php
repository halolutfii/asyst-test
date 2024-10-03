namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Booking;

class FlightController extends Controller 
{

    public function searchFlight(Request $request)
    {
        $request->validate([
            'departure_airport' => 'required|string',
            'arrival_airport' => 'required|string',
            'departure_date' => 'required|date',
        ]);

        $flights = Flight::where('departure_airport', $request->departure_airport)
            ->where('arrival_airport', $request->arrival_airport)
            ->whereDate('departure_time', $request->departure_date)
            ->get();

        return $flights
    }

    public function getFlight($id)
    {
        $flight = Flight::orderBy('id', 'desc')->find($id);

        return response()->json($flight);
    }

    public funtion createBooking(Request $request)
    {
        $request->validate([
            'flight_id' => 'required|exists:flights,id',
            'passenger_name' => 'required|string',
            'passenger_email' => 'required|email',
            'passenger_phone' => 'required|string',
        ]);

        $booking = new Booking();
        $booking->flight_id = $request->flight_id;
        $booking->passenger_name = $request->passenger_name;
        $booking->passenger_email = $request->passenger_email;
        $booking->passenger_phone = $request->passenger_phone;
        $booking->save();

        return response()->json([
            'message' => 'Booking berhasil disimpan',
            'booking' => $booking
        ], 201);
    }

    public function getBooking($id)
    {
        $booking = Booking::with(['flight'])->find($id);
        return response()->json($booking);
    }
}
