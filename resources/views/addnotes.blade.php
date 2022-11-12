<!-- NOT IN USE -->
<h1>Add Notes here</h1>
<form action="add" method="POST">
    @csrf
    <!-- <input type="number" name="uuid" placeholder="your id"><br><br> -->
    <input type="text" name='note' placeholder='Write your notes here'><br><br>
    <button type="submit">Save Note</button>
</form>