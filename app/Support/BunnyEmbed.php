<?php
namespace App\Support;

class BunnyEmbed {
    public static function signedIframeSrc(string $videoId, int $ttl = 600): string {
        $lib = config('services.bunny_stream.library_id');
        $key = config('services.bunny_stream.embed_token_key');

        $expires = time() + $ttl;
        $token = hash('sha256', $key . $videoId . $expires);

        return "https://iframe.mediadelivery.net/embed/{$lib}/{$videoId}?token={$token}&expires={$expires}&responsive=true&preload=true";
    }
}
