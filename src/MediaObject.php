<?php

namespace Stevenmaguire\Schemas;

/**
 * An image, video, or audio object embedded in a web page. Note that a creative
 * work may have many media objects associated with it on the same web page.
 * For example, a page about a single song (MusicRecording) may have a music
 * video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
 *
 * @see http://schema.org/MediaObject Documentation on Schema.org
 */
interface MediaObject extends CreativeWork
{

}
