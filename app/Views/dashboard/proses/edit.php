<form
action="/updateproses/<?= $proses['id']; ?>"
method="post">



Status

<input
type="text"
name="status"

value="
<?= $proses['status']; ?>
">

<br>


Lokasi

<input
type="text"
name="lokasi"

value="
<?= $proses['lokasi']; ?>
">

<br>


Tanggal

<input
type="date"
name="tanggal"

value="
<?= $proses['tanggal']; ?>
">

<br>


<textarea
name="keterangan">

<?= $proses['keterangan']; ?>

</textarea>


<button>

Update

</button>

</form>