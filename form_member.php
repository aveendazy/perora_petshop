<html>
    <head>
        <title>Form Member</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="form/form.css">
    </head>
    <body>
        <h1 style="text-align:center;padding-top: 50px;"> TAMBAH MEMBER BARU </h1>
        <form method="POST" action="create_member.php">
            <label for="Member ID">Member ID</label>
            <input type="text" id="member_id" name="member_id" placeholder="Tulis Member ID ..." autocomplete="off" required />

            <label for="text">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Tulis Nama ..." autocomplete="off" required />

            <label for="text">Alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="Tulis Alamat ..." autocomplete="off" required />

            <label for="text">No HP</label>
            <input type="text" id="no_hp" name="no_hp" placeholder="Tulis Nomor HP ..." autocomplete="off" required />

            <label for="text">Tanggal Daftar</label>
            <input type="date" id="tgl_daftar" name="tgl_daftar" placeholder="Tulis Tanggal Daftar ..." autocomplete="off" required />

            <input type="submit" name="submit" value="Submit" />

        </form>
    </body>
</html>
