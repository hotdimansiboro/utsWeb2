<label for="npm">NPM:</label><br>
<input type="text" id="npm" name="npm" value="{{ $mahasiswa->npm ?? old('npm') }}"><br><br>

<label for="nama_lengkap">Nama Lengkap:</label><br>
<input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $mahasiswa->nama_lengkap ?? old('nama_lengkap') }}"><br><br>

<label for="email">Email:</label><br>
<input type="email" id="email" name="email" value="{{ $mahasiswa->email ?? old('email') }}"><br><br>

<label for="angkatan">Angkatan:</label><br>
<input type="text" id="angkatan" name="angkatan" value="{{ $mahasiswa->angkatan ?? old('angkatan') }}"><br><br>

<button type="submit">Submit</button>
