-- ==========================================
-- 1. DEFINISI TIPE DATA CUSTOM (ENUM)
-- ==========================================
CREATE TYPE user_role AS ENUM ('admin', 'manager', 'karyawan');
CREATE TYPE leave_status AS ENUM ('pending', 'approved', 'rejected');
CREATE TYPE gender_type AS ENUM ('Laki-laki', 'Perempuan');
CREATE TYPE emp_status AS ENUM ('Tetap', 'Kontrak', 'Probation');

-- ==========================================
-- 2. TABEL MASTER (REFERENSI)
-- ==========================================

-- Menyimpan daftar Departemen/Jabatan (IT, Digital Marketing, HRD, dll)
CREATE TABLE jabatan (
    id SERIAL PRIMARY KEY,
    nama_jabatan VARCHAR(100) NOT NULL UNIQUE
);

-- Menyimpan jenis-jenis cuti yang tersedia
CREATE TABLE jenis_cuti (
    id SERIAL PRIMARY KEY,
    nama_cuti VARCHAR(50) NOT NULL UNIQUE,
    jatah_hari INT DEFAULT 0, -- Contoh: 12 hari untuk Tahunan
    keterangan TEXT
);

-- ==========================================
-- 3. TABEL UTAMA (PENGGUNA)
-- ==========================================

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    nip VARCHAR(20) UNIQUE NOT NULL,
    nama VARCHAR(150) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role user_role DEFAULT 'karyawan',
    jenis_kelamin gender_type NOT NULL,
    tgl_masuk DATE NOT NULL DEFAULT CURRENT_DATE,
    status_karyawan emp_status DEFAULT 'Probation',
    is_active BOOLEAN DEFAULT TRUE,
    
    -- Relasi ke Jabatan
    jabatan_id INT REFERENCES jabatan(id) ON DELETE SET NULL,
    
    -- Self-Reference: Menunjuk ke User lain yang menjadi Atasannya
    atasan_id INT REFERENCES users(id) ON DELETE SET NULL,
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==========================================
-- 4. TABEL TRANSAKSI & LOGIKA
-- ==========================================

-- Monitoring sisa jatah cuti tahunan per karyawan
CREATE TABLE kuota_cuti (
    id SERIAL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES users(id) ON DELETE CASCADE,
    tahun INT NOT NULL, 
    sisa_kuota INT NOT NULL,
    UNIQUE(user_id, tahun)
);

-- Data pengajuan cuti
CREATE TABLE pengajuan_cuti (
    id SERIAL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES users(id) ON DELETE CASCADE,
    jenis_cuti_id INT NOT NULL REFERENCES jenis_cuti(id),
    
    tgl_mulai DATE NOT NULL,
    tgl_selesai DATE NOT NULL,
    total_hari INT NOT NULL, 
    alasan TEXT NOT NULL,
    lampiran VARCHAR(255), -- Lokasi path file bukti/surat dokter
    
    status leave_status DEFAULT 'pending',
    catatan_atasan TEXT, -- Alasan jika ditolak atau catatan tambahan
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    -- Validasi: Mencegah tgl_selesai lebih dulu dari tgl_mulai
    CONSTRAINT check_date_range CHECK (tgl_selesai >= tgl_mulai)
);