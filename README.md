
# Dokumentasi API iPosyandu

Berisi beberapa API yang disediakan oleh web iPosyandu


### Get all jadwal

* Url
  * /api/schedule

* Method
  * GET

* Response


```markdown
  {
    "data": [
        {
            "id": 1,
            "lokasi": "Suwawa",
            "tanggal": "05/29/2023",
            "status": "Terjadwal"
        }
    ]
  }
```

### Get all peserta

* Url
  * /api/peserta

* Method
  * GET

* Response


```markdown
{
  "data": [
      {
          "id": 1,
          "nama": "Masamune",
          "tempat_lahir": "Gorontalo",
          "tanggal_lahir": "2013-06-30",
          "alamat": "Jalan Kalimantan",
          "no_telp": "084232032931"
      },
      {
          "id": 2,
          "nama": "Killua",
          "tempat_lahir": "Telaga Biru",
          "tanggal_lahir": "2014-05-06",
          "alamat": "Jalan Sarimadu",
          "no_telp": "0814071070"
      }
  ]
}
```

### Get peserta by id

* Url
  * /api/peserta/{id}

* Method
  * GET

* Response


```markdown
{
  "data": [
      {
        "id": 2,
        "nama": "Killua",
        "tempat_lahir": "Telaga Biru",
        "tanggal_lahir": "2014-05-06",
        "alamat": "Jalan Sarimadu",
        "no_telp": "0814071070"
      }
  ]
}
```

### Get all kader

* Url
  * /api/kader

* Method
  * GET

* Response


```markdown
{
  "data": [
      {
        "id": 1,
        "nama": "Sasaki",
        "alamat": "Jalan Krakatau",
        "no_telp": "0804140181"
      },
      {
        "id": 2,
        "nama": "Suzune",
        "alamat": "Jalan Malboro",
        "no_telp": "01824901790"
      }
  ]
}
```

### Get kader by id

* Url
  * /api/kader/{id}

* Method
  * GET

* Response


```markdown
{
  "data": [
      {
        "id": 1,
        "nama": "Sasaki",
        "alamat": "Jalan Krakatau",
        "no_telp": "0804140181"
      }
  ]
}
```

### Get all vitamin

* Url
  * /api/vitamin

* Method
  * GET

* Response


```markdown
{
  "data": [
      {
        "id": 1,
        "nama": "Vitamin Bayi",
        "usia": "Bayi",
        "stok": 100
      },
      {
        "id": 2,
        "nama": "Vitamin C",
        "usia": "Umum",
        "stok": 200
      }
  ]
}
```

### Get vitamin by id

* Url
  * /api/vitamin/{id}

* Method
  * GET

* Response


```markdown
{
  "data": [
      {
        "id": 2,
        "nama": "Vitamin C",
        "usia": "Umum",
        "stok": 200
      }
  ]
}
```

### Get all kb

* Url
  * /api/kb

* Method
  * GET

* Response


```markdown
{
  "data": [
      {
        "id": 1,
        "nama": "KB-01",
        "jenis": "Suntik",
        "stok": 20
      },
      {
        "id": 2,
        "nama": "KB-02",
        "jenis": "Pil",
        "stok": 100
      }
  ]
}
```

### Get kb by id

* Url
  * /api/kb/{id}

* Method
  * GET

* Response


```markdown
{
  "data": [
      {
        "id": 1,
        "nama": "KB-01",
        "jenis": "Suntik",
        "stok": 20
      }
  ]
}
```