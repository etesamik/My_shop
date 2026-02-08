public function store(Request $request)
{
$this->authorize('company.store');

$validated = $request->validate([
'name' => 'required|string|max:255',
]);

