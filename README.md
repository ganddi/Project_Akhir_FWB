<div align="center">
    <h1> MudahBerkemah(Sistem Penyewaan Peralatan Berkemah) </h1>


  <img src="![Image](https://github.com/user-attachments/assets/c6e0944d-fa74-44c4-b1b8-459465e75638)" alt="Logo Unsulbar" width="200"/>


  <p><strong>Muh.Sugandi</strong><br/>D0223315</p> <br>

  <h1> FRAMEWORK WEB BASED </h1>
  <h1> 2025 </h1>

</div>


---

# MudahBerkemah - Sistem Penyewaan Peralatan Berkemah

**MudahBerkemah** adalah platform web yang memfasilitasi penyewaan peralatan berkemah. Sistem ini dirancang untuk tiga jenis pengguna utama: **Admin**, **Pelanggan (Penyewa)**, dan **Pemilik Bisnis**, masing-masing dengan hak akses dan fungsionalitas berbeda.

---

## Role Pengguna

### 1. Admin

Admin bertanggung jawab atas pengelolaan operasional sistem.

* Mengelola transaksi penyewaan.
* Mengelola daftar barang (tambah/edit/hapus).
* Mengelola data peminjaman (status, pengembalian, dll).

### 2. Pelanggan / Penyewa

Pelanggan adalah pengguna yang menyewa barang.

* Melihat daftar barang yang tersedia.
* Melakukan penyewaan barang.
* Melihat status peminjaman.

### 3. Pemilik

Pemilik bisnis menggunakan sistem untuk pengambilan keputusan.

* Melihat riwayat penjualan dan transaksi.
* Menganalisis data penyewaan untuk perencanaan bisnis.

---

## Struktur Tabel Database

### 1. `users`

| Kolom       | Tipe Data | Keterangan                       |
| ----------- | --------- | -------------------------------- |
| id          | INT (PK)  | ID unik pengguna                 |
| name        | VARCHAR   | Nama lengkap pengguna            |
| email       | VARCHAR   | Email pengguna                   |
| password    | VARCHAR   | Password yang sudah di-hash      |
| role        | ENUM      | \['admin', 'penyewa', 'pemilik'] |
| created\_at | TIMESTAMP | Tanggal registrasi pengguna      |

### 2. `items`

| Kolom           | Tipe Data | Keterangan                   |
| --------------- | --------- | ---------------------------- |
| id              | INT (PK)  | ID unik barang               |
| name            | VARCHAR   | Nama barang                  |
| description     | TEXT      | Deskripsi barang             |
| stock           | INT       | Jumlah stok barang           |
| price\_per\_day | DECIMAL   | Harga sewa per hari          |
| image\_url      | VARCHAR   | URL gambar barang (opsional) |
| created\_at     | TIMESTAMP | Tanggal barang ditambahkan   |

### 3. `rentals`

| Kolom        | Tipe Data | Keterangan                                               |
| ------------ | --------- | -------------------------------------------------------- |
| id           | INT (PK)  | ID unik peminjaman                                       |
| user\_id     | INT (FK)  | ID penyewa                                               |
| total\_price | DECIMAL   | Total biaya sewa                                         |
| status       | ENUM      | \['menunggu', 'disetujui', 'dikembalikan', 'dibatalkan'] |
| start\_date  | DATE      | Tanggal mulai sewa                                       |
| end\_date    | DATE      | Tanggal selesai sewa                                     |
| created\_at  | TIMESTAMP | Tanggal transaksi                                        |

### 4. `rental_items`

| Kolom      | Tipe Data | Keterangan            |
| ---------- | --------- | --------------------- |
| id         | INT (PK)  | ID unik baris         |
| rental\_id | INT (FK)  | ID peminjaman         |
| item\_id   | INT (FK)  | ID barang             |
| quantity   | INT       | Jumlah unit disewa    |
| price      | DECIMAL   | Harga sewa per barang |

### 5. `sales_logs`

| Kolom             | Tipe Data | Keterangan              |
| ----------------- | --------- | ----------------------- |
| id                | INT (PK)  | ID log                  |
| rental\_id        | INT (FK)  | ID transaksi peminjaman |
| user\_id          | INT (FK)  | ID penyewa              |
| total\_price      | DECIMAL   | Total harga             |
| status            | VARCHAR   | Status transaksi        |
| transaction\_date | TIMESTAMP | Tanggal transaksi       |

---
