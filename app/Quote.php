<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Storage;

class Quote extends Model
{
    use Commentable;
    use Recommendable;

    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get a string path for the quote.
     *
     * @return string
     */
    public function path()
    {
        return "/quotes/{$this->author->slug}/{$this->id}";
    }

    /**
     * A quote is assigned to an author.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(QuoteAuthor::class, 'author_id');
    }

    /**
     * A quote belongs to a creator (user that generated the original quote submission).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * A quote belongs to an updating user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * A quote belongs to an approving user (editor that approved the quote from submissions table).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    /**
     * Create the standard red instagram image for the quote.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function makeBasicInstagram()
    {
        $quote = '"'.$this->quote_text.'"';
        $length = strlen($quote);
        $fontsize = 75;
        $char_per_line=floor(33);

        //Red Instagram
        $img = Image::make('img/templates/instagram-red.jpg');
        if ($length < 100) { $top = 250; $spacer = 80; } elseif ($length > 230) { $top = 50; $spacer = 40; } else { $top = 100; $spacer = 80; }
        $string = wordwrap($quote,$char_per_line,"|");
        $strings = explode("|",$string);
        $i = 1;
        foreach($strings as $string){
            $img->text($string, 540, $top, function($font) {
                $font->file('fonts/Roboto-Medium.ttf');
                $font->size(65);
                $font->color('#ffffff');
                $font->align('center');
                $font->valign('top');
            });
            $top=ceil($top+($fontsize*1.10)); //shift top postition down
        }
        $top = $top + $spacer;
        $img->text("-".$this->author->display_name, 1000, $top, function($font) {
            $font->file('fonts/RockSalt.ttf');
            $font->size(45);
            $font->color('#ffffff');
            $font->align('right');
            $font->valign('top');
        });
        $img->text('.com/'.$this->id, 162, 1048, function($font) {
            $font->file('fonts/Roboto-Medium.ttf');
            $font->size(34);
            $font->color('#ffffff');
            $font->align('left');
            $font->valign('bottom');
        });
        if ($length < 260) {
            $img->save(public_path('img/instagram-red.jpg'));
        }
        //store('quotes/instagram', 'gcs');

        //Grey Instagram
        $img = Image::make('img/templates/instagram-grey.jpg');
        if ($length < 100) { $top = 250; $spacer = 80; } elseif ($length > 230) { $top = 50; $spacer = 40; } else { $top = 100; $spacer = 80; }
        $string = wordwrap($quote,$char_per_line,"|");
        $strings = explode("|",$string);
        $i = 1;
        foreach($strings as $string){
            $img->text($string, 540, $top, function($font) {
                $font->file('fonts/Roboto-Medium.ttf');
                $font->size(65);
                $font->color('#ffffff');
                $font->align('center');
                $font->valign('top');
            });
            $top=ceil($top+($fontsize*1.10)); //shift top postition down
        }
        $top = $top + $spacer;
        $img->text("-".$this->author->display_name, 1000, $top, function($font) {
            $font->file('fonts/RockSalt.ttf');
            $font->size(45);
            $font->color('#ffffff');
            $font->align('right');
            $font->valign('top');
        });
        $img->text('.com/'.$this->id, 162, 1048, function($font) {
            $font->file('fonts/Roboto-Medium.ttf');
            $font->size(34);
            $font->color('#ffffff');
            $font->align('left');
            $font->valign('bottom');
        });
        if ($length < 260) {
            $img->save(public_path('img/instagram-grey.jpg'));
        }
        //store('quotes/instagram', 'gcs');

        //Black Instagram
        $img = Image::make('img/templates/instagram-black.jpg');
        if ($length < 100) { $top = 250; $spacer = 80; } elseif ($length > 230) { $top = 50; $spacer = 40; } else { $top = 100; $spacer = 80; }
        $string = wordwrap($quote,$char_per_line,"|");
        $strings = explode("|",$string);
        $i = 1;
        foreach($strings as $string){
            $img->text($string, 540, $top, function($font) {
                $font->file('fonts/Roboto-Medium.ttf');
                $font->size(65);
                $font->color('#ffffff');
                $font->align('center');
                $font->valign('top');
            });
            $top=ceil($top+($fontsize*1.10)); //shift top postition down
        }
        $top = $top + $spacer;
        $img->text("-".$this->author->display_name, 1000, $top, function($font) {
            $font->file('fonts/RockSalt.ttf');
            $font->size(45);
            $font->color('#ffffff');
            $font->align('right');
            $font->valign('top');
        });
        $img->text('.com/'.$this->id, 162, 1048, function($font) {
            $font->file('fonts/Roboto-Medium.ttf');
            $font->size(34);
            $font->color('#ffffff');
            $font->align('left');
            $font->valign('bottom');
        });
        if ($length < 260) {
            $img->save(public_path('img/instagram-black.jpg'));
        }
        //store('quotes/instagram', 'gcs');

        //Blue Instagram
        $img = Image::make('img/templates/instagram-blue.jpg');
        if ($length < 100) { $top = 250; $spacer = 80; } elseif ($length > 230) { $top = 50; $spacer = 40; } else { $top = 100; $spacer = 80; }
        $string = wordwrap($quote,$char_per_line,"|");
        $strings = explode("|",$string);
        $i = 1;
        foreach($strings as $string){
            $img->text($string, 540, $top, function($font) {
                $font->file('fonts/Roboto-Medium.ttf');
                $font->size(65);
                $font->color('#ffffff');
                $font->align('center');
                $font->valign('top');
            });
            $top=ceil($top+($fontsize*1.10)); //shift top postition down
        }
        $top = $top + $spacer;
        $img->text("-".$this->author->display_name, 1000, $top, function($font) {
            $font->file('fonts/RockSalt.ttf');
            $font->size(45);
            $font->color('#ffffff');
            $font->align('right');
            $font->valign('top');
        });
        $img->text('.com/'.$this->id, 162, 1048, function($font) {
            $font->file('fonts/Roboto-Medium.ttf');
            $font->size(34);
            $font->color('#ffffff');
            $font->align('left');
            $font->valign('bottom');
        });
        if ($length < 260) {
            $img->save(public_path('img/instagram-blue.jpg'));
        }
        //$contents = Storage::get('img/instagram-blue.jpg')->store('quotes/instagram', 'gcs');

    }

    /**
     * Return popular quotes to display in quotes section sidebar.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public static function popular()
    {
        return static::whereIn('author_id', [4, 5, 6, 7, 8, 9, 10, 11])->inRandomOrder()->limit(5)->get();
    }

}
