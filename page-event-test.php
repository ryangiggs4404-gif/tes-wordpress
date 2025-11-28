<?php
/*
Template Name: Event Page
*/

get_header();

// Ambil data dari functions
$data_event = ambil_data_event();

// Cek apakah ada request sorting
$sort = isset($_GET['urutan_harga']) ? $_GET['urutan_harga'] : '';

// Logika sorting sederhana
if ($sort == 'murah') {
    usort($data_event, function($a, $b) {
        return $a['event_price'] - $b['event_price'];
    });
} elseif ($sort == 'mahal') {
    usort($data_event, function($a, $b) {
        return $b['event_price'] - $a['event_price'];
    });
}
?>

<style>
    /* CSS Sederhana */
    .wadah-event {
        width: 90%;
        margin: 20px auto;
    }
    .alat-sort {
        margin-bottom: 20px;
        padding: 10px;
        background: #f1f1f1;
        border: 1px solid #ccc;
    }
    .list-event {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .kartu {
        border: 1px solid #ddd;
        width: 30%; /* Biar jejer 3 */
        min-width: 250px;
        background: #fff;
    }
    .banner-warna {
        height: 100px;
        background-color: #444; /* Warna abu gelap polos */
    }
    .info {
        padding: 15px;
    }
    .nama-event {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .harga {
        margin-top: 10px;
        color: green;
        font-weight: bold;
    }
    
    /* Responsive buat HP */
    @media (max-width: 600px) {
        .kartu { width: 100%; }
    }
</style>

<div class="wadah-event">
    <h1><?php the_title(); ?></h1>
    
    <p><?php echo do_shortcode('[simple_event_count]'); ?></p>

    <div class="alat-sort">
        <form method="GET">
            <label>Urutkan Harga:</label>
            <select name="urutan_harga">
                <option value="">-- Pilih --</option>
                <option value="murah" <?php if($sort == 'murah') echo 'selected'; ?>>Termurah</option>
                <option value="mahal" <?php if($sort == 'mahal') echo 'selected'; ?>>Termahal</option>
            </select>
            <button type="submit">Urutkan</button>
        </form>
    </div>

    <div class="list-event">
        <?php foreach ($data_event as $item) : ?>
            <div class="kartu">
                <div class="banner-warna"></div>
                <div class="info">
                    <div class="nama-event"><?php echo $item['event_name']; ?></div>
                    <div>Tanggal: <?php echo $item['event_date']; ?></div>
                    <div>Lokasi: <?php echo $item['event_location']; ?></div>
                    <div class="harga">Rp <?php echo number_format($item['event_price']); ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>