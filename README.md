<h2><a id="user-content-содержание" class="anchor" aria-hidden="true" href="#содержание"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a>Содержание</h2>
<article class="markdown-body entry-content container-lg" itemprop="text">
<h3><a id="user-content-принцип-единственной-ответственности-single-responsibility-principle" class="anchor" aria-hidden="true" href="#принцип-единственной-ответственности-single-responsibility-principle"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Принцип единственной ответственности (Single responsibility principle)</strong></h3>
<p>Каждый класс и метод должны выполнять лишь одну функцию.</p>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getFullNameAttribute</span>()
{
    <span class="pl-k">if</span> (<span class="pl-en">auth</span>()-&gt;<span class="pl-en">user</span>() &amp;&amp; <span class="pl-en">auth</span>()-&gt;<span class="pl-en">user</span>()-&gt;<span class="pl-en">hasRole</span>(<span class="pl-s">'client'</span>) &amp;&amp; <span class="pl-en">auth</span>()-&gt;<span class="pl-en">user</span>()-&gt;<span class="pl-en">isVerified</span>()) {
        <span class="pl-k">return</span> <span class="pl-s">'Mr. '</span> . <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">first_name</span> . <span class="pl-s">' '</span> . <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">middle_name</span> . <span class="pl-s">' '</span> . <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">last_name</span>;
    } <span class="pl-k">else</span> {
        <span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">first_name</span>[<span class="pl-c1">0</span>] . <span class="pl-s">'. '</span> . <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">last_name</span>;
    }
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function getFullNameAttribute()
{
    if (auth()->user() &amp;&amp; auth()->user()->hasRole('client') &amp;&amp; auth()->user()->isVerified()) {
        return 'Mr. ' . $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    } else {
        return $this->first_name[0] . '. ' . $this->last_name;
    }
}
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getFullNameAttribute</span>()
{
    <span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-en">isVerifiedClient</span>() ? <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-en">getFullNameLong</span>() : <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-en">getFullNameShort</span>();
}

<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">isVerifiedClient</span>()
{
<span class="pl-k">return</span> <span class="pl-en">auth</span>()-&gt;<span class="pl-en">user</span>() &amp;&amp; <span class="pl-en">auth</span>()-&gt;<span class="pl-en">user</span>()-&gt;<span class="pl-en">hasRole</span>(<span class="pl-s">'client'</span>) &amp;&amp; <span class="pl-en">auth</span>()-&gt;<span class="pl-en">user</span>()-&gt;<span class="pl-en">isVerified</span>();
}

<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getFullNameLong</span>()
{
<span class="pl-k">return</span> <span class="pl-s">'Mr. '</span> . <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">first_name</span> . <span class="pl-s">' '</span> . <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">middle_name</span> . <span class="pl-s">' '</span> . <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">last_name</span>;
}

<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getFullNameShort</span>()
{
<span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">first_name</span>[<span class="pl-c1">0</span>] . <span class="pl-s">'. '</span> . <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">last_name</span>;
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function getFullNameAttribute()
{
return $this->isVerifiedClient() ? $this->getFullNameLong() : $this->getFullNameShort();
}

public function isVerifiedClient()
{
return auth()->user() &amp;&amp; auth()->user()->hasRole('client') &amp;&amp; auth()->user()->isVerified();
}

public function getFullNameLong()
{
return 'Mr. ' . $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
}

public function getFullNameShort()
{
return $this->first_name[0] . '. ' . $this->last_name;
}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-тонкие-контроллеры-толстые-модели" class="anchor" aria-hidden="true" href="#тонкие-контроллеры-толстые-модели"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Тонкие контроллеры, толстые модели</strong></h3>
<p>По своей сути, это лишь один из частных случаев принципа единой ответственности. Выносите работу с данными в модели при работе с Eloquent или в репозитории при работе с Query Builder или "сырыми" SQL запросами.</p>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">index</span>()
{
    <span class="pl-s1"><span class="pl-c1">$</span>clients</span> = <span class="pl-v">Client</span>::<span class="pl-en">verified</span>()
        -&gt;<span class="pl-en">with</span>([<span class="pl-s">'orders'</span> =&gt; <span class="pl-k">function</span> (<span class="pl-s1"><span class="pl-c1">$</span>q</span>) {
            <span class="pl-s1"><span class="pl-c1">$</span>q</span>-&gt;<span class="pl-en">where</span>(<span class="pl-s">'created_at'</span>, <span class="pl-s">'&gt;'</span>, <span class="pl-v">Carbon</span>::<span class="pl-en">today</span>()-&gt;<span class="pl-en">subWeek</span>());
        }])
        -&gt;<span class="pl-en">get</span>();

    <span class="pl-k">return</span> <span class="pl-en">view</span>(<span class="pl-s">'index'</span>, [<span class="pl-s">'clients'</span> =&gt; <span class="pl-s1"><span class="pl-c1">$</span>clients</span>]);
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function index()
{
$clients = Client::verified()
->with(['orders' => function ($q) {
$q->where('created_at', '>', Carbon::today()->subWeek());
}])
->get();

    return view('index', ['clients' => $clients]);
}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">index</span>()
{
    <span class="pl-k">return</span> <span class="pl-en">view</span>(<span class="pl-s">'index'</span>, [<span class="pl-s">'clients'</span> =&gt; <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">client</span>-&gt;<span class="pl-en">getWithNewOrders</span>()]);
}

<span class="pl-k">class</span> <span class="pl-v">Client</span> <span class="pl-k">extends</span> <span class="pl-v">Model</span>
{
<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getWithNewOrders</span>()
{
<span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-en">verified</span>()
-&gt;<span class="pl-en">with</span>([<span class="pl-s">'orders'</span> =&gt; <span class="pl-k">function</span> (<span class="pl-s1"><span class="pl-c1">$</span>q</span>) {
<span class="pl-s1"><span class="pl-c1">$</span>q</span>-&gt;<span class="pl-en">where</span>(<span class="pl-s">'created_at'</span>, <span class="pl-s">'&gt;'</span>, <span class="pl-v">Carbon</span>::<span class="pl-en">today</span>()-&gt;<span class="pl-en">subWeek</span>());
}])
-&gt;<span class="pl-en">get</span>();
}
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function index()
{
return view('index', ['clients' => $this->client->getWithNewOrders()]);
}

class Client extends Model
{
public function getWithNewOrders()
{
return $this->verified()
->with(['orders' => function ($q) {
$q->where('created_at', '>', Carbon::today()->subWeek());
}])
->get();
}
}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-валидация" class="anchor" aria-hidden="true" href="#валидация"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Валидация</strong></h3>
<p>Следуя принципам тонкого контроллера и SRP, выносите валидацию из контроллера в Request классы.</p>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">store</span>(<span class="pl-smi">Request</span> <span class="pl-s1"><span class="pl-c1">$</span>request</span>)
{
    <span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-en">validate</span>([
        <span class="pl-s">'title'</span> =&gt; <span class="pl-s">'required|unique:posts|max:255'</span>,
        <span class="pl-s">'body'</span> =&gt; <span class="pl-s">'required'</span>,
        <span class="pl-s">'publish_at'</span> =&gt; <span class="pl-s">'nullable|date'</span>,
    ]);

    <span class="pl-c1">.</span>.<span class="pl-c1">.</span>.
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function store(Request $request)
{
$request->validate([
'title' => 'required|unique:posts|max:255',
'body' => 'required',
'publish_at' => 'nullable|date',
]);

    ....
}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">store</span>(<span class="pl-smi">PostRequest</span> <span class="pl-s1"><span class="pl-c1">$</span>request</span>)
{    
    <span class="pl-c1">.</span>.<span class="pl-c1">.</span>.
}

<span class="pl-k">class</span> <span class="pl-v">PostRequest</span> <span class="pl-k">extends</span> <span class="pl-v">Request</span>
{
<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">rules</span>()
{
<span class="pl-k">return</span> [
<span class="pl-s">'title'</span> =&gt; <span class="pl-s">'required|unique:posts|max:255'</span>,
<span class="pl-s">'body'</span> =&gt; <span class="pl-s">'required'</span>,
<span class="pl-s">'publish_at'</span> =&gt; <span class="pl-s">'nullable|date'</span>,
];
}
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function store(PostRequest $request)
{    
....
}

class PostRequest extends Request
{
public function rules()
{
return [
'title' => 'required|unique:posts|max:255',
'body' => 'required',
'publish_at' => 'nullable|date',
];
}
}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-бизнес-логика-в-сервис-классах" class="anchor" aria-hidden="true" href="#бизнес-логика-в-сервис-классах"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Бизнес логика в сервис-классах</strong></h3>
<p>Контроллер должен выполнять только свои прямые обязанности, поэтому выносите всю бизнес логику в отдельные классы и сервис классы.</p>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">store</span>(<span class="pl-smi">Request</span> <span class="pl-s1"><span class="pl-c1">$</span>request</span>)
{
    <span class="pl-k">if</span> (<span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-en">hasFile</span>(<span class="pl-s">'image'</span>)) {
        <span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-en">file</span>(<span class="pl-s">'image'</span>)-&gt;<span class="pl-en">move</span>(<span class="pl-en">public_path</span>(<span class="pl-s">'images'</span>) . <span class="pl-s">'temp'</span>);
    }

    <span class="pl-c1">.</span>.<span class="pl-c1">.</span>.
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function store(Request $request)
{
if ($request->hasFile('image')) {
$request->file('image')->move(public_path('images') . 'temp');
}

    ....
}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">store</span>(<span class="pl-smi">Request</span> <span class="pl-s1"><span class="pl-c1">$</span>request</span>)
{
    <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">articleService</span>-&gt;<span class="pl-en">handleUploadedImage</span>(<span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-en">file</span>(<span class="pl-s">'image'</span>));

    <span class="pl-c1">.</span>.<span class="pl-c1">.</span>.
}

<span class="pl-k">class</span> <span class="pl-v">ArticleService</span>
{
<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">handleUploadedImage</span>(<span class="pl-s1"><span class="pl-c1">$</span>image</span>)
{
<span class="pl-k">if</span> (!<span class="pl-en">is_null</span>(<span class="pl-s1"><span class="pl-c1">$</span>image</span>)) {
<span class="pl-s1"><span class="pl-c1">$</span>image</span>-&gt;<span class="pl-en">move</span>(<span class="pl-en">public_path</span>(<span class="pl-s">'images'</span>) . <span class="pl-s">'temp'</span>);
}
}
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function store(Request $request)
{
$this->articleService->handleUploadedImage($request->file('image'));

    ....
}

class ArticleService
{
public function handleUploadedImage($image)
{
if (!is_null($image)) {
$image->move(public_path('images') . 'temp');
}
}
}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-не-повторяйся-dry" class="anchor" aria-hidden="true" href="#не-повторяйся-dry"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Не повторяйся (DRY)</strong></h3>
<p>Этот принцип призывает вас переиспользовать код везде, где это возможно. Если вы следуете принципу SRP, вы уже избегаете повторений, но Laravel позволяет вам также переиспользовать представления, части Eloquent запросов и т.д.</p>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getActive</span>()
{
    <span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-en">where</span>(<span class="pl-s">'verified'</span>, <span class="pl-c1">1</span>)-&gt;<span class="pl-en">whereNotNull</span>(<span class="pl-s">'deleted_at'</span>)-&gt;<span class="pl-en">get</span>();
}

<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getArticles</span>()
{
<span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-en">whereHas</span>(<span class="pl-s">'user'</span>, <span class="pl-k">function</span> (<span class="pl-s1"><span class="pl-c1">$</span>q</span>) {
<span class="pl-s1"><span class="pl-c1">$</span>q</span>-&gt;<span class="pl-en">where</span>(<span class="pl-s">'verified'</span>, <span class="pl-c1">1</span>)-&gt;<span class="pl-en">whereNotNull</span>(<span class="pl-s">'deleted_at'</span>);
})-&gt;<span class="pl-en">get</span>();
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function getActive()
{
return $this->where('verified', 1)->whereNotNull('deleted_at')->get();
}

public function getArticles()
{
return $this->whereHas('user', function ($q) {
$q->where('verified', 1)->whereNotNull('deleted_at');
})->get();
}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">scopeActive</span>(<span class="pl-s1"><span class="pl-c1">$</span>q</span>)
{
    <span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span>q</span>-&gt;<span class="pl-en">where</span>(<span class="pl-s">'verified'</span>, <span class="pl-c1">1</span>)-&gt;<span class="pl-en">whereNotNull</span>(<span class="pl-s">'deleted_at'</span>);
}

<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getActive</span>()
{
<span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-en">active</span>()-&gt;<span class="pl-en">get</span>();
}

<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getArticles</span>()
{
<span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-en">whereHas</span>(<span class="pl-s">'user'</span>, <span class="pl-k">function</span> (<span class="pl-s1"><span class="pl-c1">$</span>q</span>) {
<span class="pl-s1"><span class="pl-c1">$</span>q</span>-&gt;<span class="pl-en">active</span>();
})-&gt;<span class="pl-en">get</span>();
}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function scopeActive($q)
{
return $q->where('verified', 1)->whereNotNull('deleted_at');
}

public function getActive()
{
return $this->active()->get();
}

public function getArticles()
{
return $this->whereHas('user', function ($q) {
$q->active();
})->get();
}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-предпочитайте-eloquent-конструктору-запросов-query-builder-и-сырым-запросам-в-бд-предпочитайте-работу-с-коллекциями-работе-с-массивами" class="anchor" aria-hidden="true" href="#предпочитайте-eloquent-конструктору-запросов-query-builder-и-сырым-запросам-в-бд-предпочитайте-работу-с-коллекциями-работе-с-массивами"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Предпочитайте Eloquent конструктору запросов (query builder) и сырым запросам в БД. Предпочитайте работу с коллекциями работе с массивами</strong></h3>
<p>Eloquent позволяет писать максимально читаемый код, а изменять функционал приложения несоизмеримо легче. У Eloquent также есть ряд удобных и мощных инструментов.</p>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-c1">SELECT</span> *
<span class="pl-c1">FROM</span> `articles`
WHERE EXISTS (SELECT *
              FROM `users`
              WHERE `articles`.`user_id` = `users`.`id`
              AND EXISTS (SELECT *
                          FROM `profiles`
                          WHERE `profiles`.`user_id` = `users`.`id`) 
              AND `users`.`deleted_at` IS NULL)
AND `verified` = '1'
AND `active` = '1'
ORDER BY `created_at` <span class="pl-c1">DESC</span></pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="SELECT *
FROM `articles`
WHERE EXISTS (SELECT *
              FROM `users`
              WHERE `articles`.`user_id` = `users`.`id`
              AND EXISTS (SELECT *
                          FROM `profiles`
                          WHERE `profiles`.`user_id` = `users`.`id`) 
              AND `users`.`deleted_at` IS NULL)
AND `verified` = '1'
AND `active` = '1'
ORDER BY `created_at` DESC
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-v">Article</span>::<span class="pl-en">has</span>(<span class="pl-s">'user.profile'</span>)-&gt;<span class="pl-en">verified</span>()-&gt;<span class="pl-en">latest</span>()-&gt;<span class="pl-en">get</span>();</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="Article::has('user.profile')->verified()->latest()->get();
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-используйте-массовое-заполнение-mass-assignment" class="anchor" aria-hidden="true" href="#используйте-массовое-заполнение-mass-assignment"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Используйте массовое заполнение (mass assignment)</strong></h3>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-s1"><span class="pl-c1">$</span>article</span> = <span class="pl-k">new</span> <span class="pl-v">Article</span>;
<span class="pl-s1"><span class="pl-c1">$</span>article</span>-&gt;<span class="pl-c1">title</span> = <span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-c1">title</span>;
<span class="pl-s1"><span class="pl-c1">$</span>article</span>-&gt;<span class="pl-c1">content</span> = <span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-c1">content</span>;
<span class="pl-s1"><span class="pl-c1">$</span>article</span>-&gt;<span class="pl-c1">verified</span> = <span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-c1">verified</span>;
<span class="pl-c">// Привязать статью к категории.</span>
<span class="pl-s1"><span class="pl-c1">$</span>article</span>-&gt;<span class="pl-c1">category_id</span> = <span class="pl-s1"><span class="pl-c1">$</span>category</span>-&gt;<span class="pl-c1">id</span>;
<span class="pl-s1"><span class="pl-c1">$</span>article</span>-&gt;<span class="pl-en">save</span>();</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="$article = new Article;
$article->title = $request->title;
$article->content = $request->content;
$article->verified = $request->verified;
// Привязать статью к категории.
$article->category_id = $category->id;
$article->save();
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-s1"><span class="pl-c1">$</span>category</span>-&gt;<span class="pl-en">article</span>()-&gt;<span class="pl-en">create</span>(<span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-en">validated</span>());</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="$category->article()->create($request->validated());
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-не-выполняйте-запросы-в-представлениях-и-используйте-нетерпеливую-загрузку-проблема-n--1" class="anchor" aria-hidden="true" href="#не-выполняйте-запросы-в-представлениях-и-используйте-нетерпеливую-загрузку-проблема-n--1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Не выполняйте запросы в представлениях и используйте нетерпеливую загрузку (проблема N + 1)</strong></h3>
<p>Плохо (будет выполнен 101 запрос в БД для 100 пользователей):</p>
<div class="highlight highlight-text-html-php position-relative"><pre>@<span class="pl-en">foreach</span> (<span class="pl-v">User</span>::<span class="pl-en">all</span>() <span class="pl-k">as</span> <span class="pl-s1"><span class="pl-c1">$</span>user</span>)
    {<span class="pl-s"></span>{ <span class="pl-s1"><span class="pl-c1">$</span>user</span>-&gt;<span class="pl-c1">profile</span>-&gt;<span class="pl-c1">name</span> }}
@endforeach</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="@foreach (User::all() as $user)
    {{ $user->profile->name }}
@endforeach
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Хорошо (будет выполнено 2 запроса в БД для 100 пользователей):</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-s1"><span class="pl-c1">$</span>users</span> = <span class="pl-v">User</span>::<span class="pl-en">with</span>(<span class="pl-s">'profile'</span>)-&gt;<span class="pl-en">get</span>();

<span class="pl-c1">.</span>.<span class="pl-c1">.</span>

@<span class="pl-en">foreach</span> (<span class="pl-s1"><span class="pl-c1">$</span>users</span> <span class="pl-k">as</span> <span class="pl-s1"><span class="pl-c1">$</span>user</span>)
{<span class="pl-s"></span>{ <span class="pl-s1"><span class="pl-c1">$</span>user</span>-&gt;<span class="pl-c1">profile</span>-&gt;<span class="pl-c1">name</span> }}
@endforeach</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="$users = User::with('profile')->get();

...

@foreach ($users as $user)
{{ $user->profile->name }}
@endforeach
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-комментируйте-код-предпочитайте-читаемые-имена-методов-комментариям" class="anchor" aria-hidden="true" href="#комментируйте-код-предпочитайте-читаемые-имена-методов-комментариям"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Комментируйте код, предпочитайте читаемые имена методов комментариям</strong></h3>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">if</span> (<span class="pl-en">count</span>((<span class="pl-smi">array</span>) <span class="pl-s1"><span class="pl-c1">$</span>builder</span>-&gt;<span class="pl-en">getQuery</span>()-&gt;<span class="pl-c1">joins</span>) &gt; <span class="pl-c1">0</span>)</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="if (count((array) $builder->getQuery()->joins) > 0)
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Лучше:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-c">// Determine if there are any joins.</span>
<span class="pl-k">if</span> (<span class="pl-en">count</span>((<span class="pl-smi">array</span>) <span class="pl-s1"><span class="pl-c1">$</span>builder</span>-&gt;<span class="pl-en">getQuery</span>()-&gt;<span class="pl-c1">joins</span>) &gt; <span class="pl-c1">0</span>)</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="// Determine if there are any joins.
if (count((array) $builder->getQuery()->joins) > 0)
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">if</span> (<span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-en">hasJoins</span>())</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="if ($this->hasJoins())
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-выносите-js-и-css-из-шаблонов-blade-и-html-из-php-кода" class="anchor" aria-hidden="true" href="#выносите-js-и-css-из-шаблонов-blade-и-html-из-php-кода"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Выносите JS и CSS из шаблонов Blade и HTML из PHP кода</strong></h3>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre>let article = `{{ json_encode($article) }}`;</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="let article = `{{ json_encode($article) }}`;
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Лучше:</p>
<div class="highlight highlight-text-html-php position-relative"><pre>&lt;input id=<span class="pl-s">"article"</span> type=<span class="pl-s">"hidden"</span> value=<span class="pl-s">'@json($article)'</span>&gt;

Или

&lt;button <span class="pl-k">class</span>=<span class="pl-s">"js-fav-article"</span> data-article=<span class="pl-s">'@json($article)'</span>&gt;{{ <span class="pl-s1"><span class="pl-c1">$</span>article</span>-&gt;<span class="pl-c1">name</span> }}&lt;button&gt;</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="<input id=&quot;article&quot; type=&quot;hidden&quot; value='@json($article)'>

Или

<button class=&quot;js-fav-article&quot; data-article='@json($article)'>{{ $article->name }}<button>
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p>В Javascript файле:</p>
<div class="highlight highlight-text-html-php position-relative"><pre>let article = <span class="pl-c1">$</span>(<span class="pl-s">'#article'</span>).<span class="pl-en">val</span>();</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="let article = $('#article').val();
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Еще лучше использовать специализированный пакет для передачи данных из бэкенда во фронтенд.</p>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-конфиги-языковые-файлы-и-константы-вместо-текста-в-коде" class="anchor" aria-hidden="true" href="#конфиги-языковые-файлы-и-константы-вместо-текста-в-коде"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Конфиги, языковые файлы и константы вместо текста в коде</strong></h3>
<p>Непосредственно в коде не должно быть никакого текста.</p>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">isNormal</span>()
{
    <span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span>article</span>-&gt;<span class="pl-c1">type</span> === <span class="pl-s">'normal'</span>;
}

<span class="pl-k">return</span> <span class="pl-en">back</span>()-&gt;<span class="pl-en">with</span>(<span class="pl-s">'message'</span>, <span class="pl-s">'Ваша статья была успешно добавлена'</span>);</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function isNormal()
{
return $article->type === 'normal';
}

return back()->with('message', 'Ваша статья была успешно добавлена');
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">isNormal</span>()
{
    <span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span>article</span>-&gt;<span class="pl-c1">type</span> === <span class="pl-v">Article</span>::<span class="pl-c1">TYPE_NORMAL</span>;
}

<span class="pl-k">return</span> <span class="pl-en">back</span>()-&gt;<span class="pl-en">with</span>(<span class="pl-s">'message'</span>, <span class="pl-en">__</span>(<span class="pl-s">'app.article_added'</span>));</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function isNormal()
{
return $article->type === Article::TYPE_NORMAL;
}

return back()->with('message', __('app.article_added'));
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-используйте-инструменты-и-практики-принятые-сообществом" class="anchor" aria-hidden="true" href="#используйте-инструменты-и-практики-принятые-сообществом"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Используйте инструменты и практики принятые сообществом</strong></h3>
<p>Laravel имеет встроенные инструменты для решения часто встречаемых задач. Предпочитайте пользоваться ими использованию сторонних пакетов и инструментов. Laravel разработчику, пришедшему в проект после вас, придется изучать и работать с новым для него инструментом, со всеми вытекающими последствиями. Получить помощь от сообщества будет также гораздо труднее. Не заставляйте клиента или работодателя платить за ваши велосипеды.</p>
<table>
<thead>
<tr>
<th>Задача</th>
<th>Стандартные инструмент</th>
<th>Нестандартные инструмент</th>
</tr>
</thead>
<tbody>
<tr>
<td>Авторизация</td>
<td>Политики</td>
<td>Entrust, Sentinel и др. пакеты, собственное решение</td>
</tr>
<tr>
<td>Работа с JS, CSS и пр.</td>
<td>Laravel Mix</td>
<td>Grunt, Gulp, сторонние пакеты</td>
</tr>
<tr>
<td>Среда разработки</td>
<td>Laravel Sail, Homestead</td>
<td>Docker</td>
</tr>
<tr>
<td>Разворачивание приложений</td>
<td>Laravel Forge</td>
<td>Deployer и многие другие</td>
</tr>
<tr>
<td>Тестирование</td>
<td>Phpunit, Mockery</td>
<td>Phpspec</td>
</tr>
<tr>
<td>e2e тестирование</td>
<td>Laravel Dusk</td>
<td>Codeception</td>
</tr>
<tr>
<td>Работа с БД</td>
<td>Eloquent</td>
<td>SQL, построитель запросов, Doctrine</td>
</tr>
<tr>
<td>Шаблоны</td>
<td>Blade</td>
<td>Twig</td>
</tr>
<tr>
<td>Работа с данными</td>
<td>Коллекции Laravel</td>
<td>Массивы</td>
</tr>
<tr>
<td>Валидация форм</td>
<td>Request классы</td>
<td>Сторонние пакеты, валидация в контроллере</td>
</tr>
<tr>
<td>Аутентификация</td>
<td>Встроенный функционал</td>
<td>Сторонние пакеты, собственное решение</td>
</tr>
<tr>
<td>Аутентификация API</td>
<td>Laravel Passport, Laravel Sanctum</td>
<td>Сторонние пакеты, использующие JWT, OAuth</td>
</tr>
<tr>
<td>Создание API</td>
<td>Встроенный функционал</td>
<td>Dingo API и другие пакеты</td>
</tr>
<tr>
<td>Работа со структурой БД</td>
<td>Миграции</td>
<td>Работа с БД напрямую</td>
</tr>
<tr>
<td>Локализация</td>
<td>Встроенный функционал</td>
<td>Сторонние пакеты</td>
</tr>
<tr>
<td>Обмен данными в реальном времени</td>
<td>Laravel Echo, Pusher</td>
<td>Пакеты и работа с веб сокетами напрямую</td>
</tr>
<tr>
<td>Генерация тестовых данных</td>
<td>Seeder классы, фабрики моделей, Faker</td>
<td>Ручное заполнение и пакеты</td>
</tr>
<tr>
<td>Планирование задач</td>
<td>Планировщик задач Laravel</td>
<td>Скрипты и сторонние пакеты</td>
</tr>
<tr>
<td>БД</td>
<td>MySQL, PostgreSQL, SQLite, SQL Server</td>
<td>MongoDb</td>
</tr>
</tbody>
</table>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-соблюдайте-соглашения-сообщества-об-именовании" class="anchor" aria-hidden="true" href="#соблюдайте-соглашения-сообщества-об-именовании"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Соблюдайте соглашения сообщества об именовании</strong></h3>
<p>Следуйте <a href="http://www.php-fig.org/psr/psr-2/" rel="nofollow">стандартам PSR</a> при написании кода.</p>
<p>Также, соблюдайте другие cоглашения об именовании:</p>
<table>
<thead>
<tr>
<th>Что</th>
<th>Правило</th>
<th>Принято</th>
<th>Не принято</th>
</tr>
</thead>
<tbody>
<tr>
<td>Контроллер</td>
<td>ед. ч.</td>
<td>ArticleController</td>
<td><del>ArticlesController</del></td>
</tr>
<tr>
<td>Маршруты</td>
<td>мн. ч.</td>
<td>articles/1</td>
<td><del>article/1</del></td>
</tr>
<tr>
<td>Имена маршрутов</td>
<td>snake_case</td>
<td>users.show_active</td>
<td><del>users.show-active, show-active-users</del></td>
</tr>
<tr>
<td>Модель</td>
<td>ед. ч.</td>
<td>User</td>
<td><del>Users</del></td>
</tr>
<tr>
<td>Отношения hasOne и belongsTo</td>
<td>ед. ч.</td>
<td>articleComment</td>
<td><del>articleComments, article_comment</del></td>
</tr>
<tr>
<td>Все остальные отношения</td>
<td>мн. ч.</td>
<td>articleComments</td>
<td><del>articleComment, article_comments</del></td>
</tr>
<tr>
<td>Таблица</td>
<td>мн. ч.</td>
<td>article_comments</td>
<td><del>article_comment, articleComments</del></td>
</tr>
<tr>
<td>Pivot таблица</td>
<td>имена моделей в алфавитном порядке в ед. ч.</td>
<td>article_user</td>
<td><del>user_article, articles_users</del></td>
</tr>
<tr>
<td>Столбец в таблице</td>
<td>snake_case без имени модели</td>
<td>meta_title</td>
<td><del>MetaTitle; article_meta_title</del></td>
</tr>
<tr>
<td>Свойство модели</td>
<td>snake_case</td>
<td>$model-&gt;created_at</td>
<td><del>$model-&gt;createdAt</del></td>
</tr>
<tr>
<td>Внешний ключ</td>
<td>имя модели ед. ч. и _id</td>
<td>article_id</td>
<td><del>ArticleId, id_article, articles_id</del></td>
</tr>
<tr>
<td>Первичный ключ</td>
<td>-</td>
<td>id</td>
<td><del>custom_id</del></td>
</tr>
<tr>
<td>Миграция</td>
<td>-</td>
<td>2017_01_01_000000_create_articles_table</td>
<td><del>2017_01_01_000000_articles</del></td>
</tr>
<tr>
<td>Метод</td>
<td>camelCase</td>
<td>getAll</td>
<td><del>get_all</del></td>
</tr>
<tr>
<td>Метод в контроллере ресурсов</td>
<td><a href="https://laravel.com/docs/master/controllers#resource-controllers" rel="nofollow">таблица</a></td>
<td>store</td>
<td><del>saveArticle</del></td>
</tr>
<tr>
<td>Метод в тесте</td>
<td>camelCase</td>
<td>testGuestCannotSeeArticle</td>
<td><del>test_guest_cannot_see_article</del></td>
</tr>
<tr>
<td>Переменные</td>
<td>camelCase</td>
<td>$articlesWithAuthor</td>
<td><del>$articles_with_author</del></td>
</tr>
<tr>
<td>Коллекция</td>
<td>описательное, мн. ч.</td>
<td>$activeUsers = User::active()-&gt;get()</td>
<td><del>$active, $data</del></td>
</tr>
<tr>
<td>Объект</td>
<td>описательное, ед. ч.</td>
<td>$activeUser = User::active()-&gt;first()</td>
<td><del>$users, $obj</del></td>
</tr>
<tr>
<td>Индексы в конфиге и языковых файлах</td>
<td>snake_case</td>
<td>articles_enabled</td>
<td><del>ArticlesEnabled; articles-enabled</del></td>
</tr>
<tr>
<td>Представление</td>
<td>kebab-case</td>
<td>show-filtered.blade.php</td>
<td><del>showFiltered.blade.php, show_filtered.blade.php</del></td>
</tr>
<tr>
<td>Конфигурационный файл</td>
<td>snake_case</td>
<td>google_calendar.php</td>
<td><del>googleCalendar.php, google-calendar.php</del></td>
</tr>
<tr>
<td>Контракт (интерфейс)</td>
<td>прилагательное или существительное</td>
<td>AuthenticationInterface</td>
<td><del>Authenticatable, IAuthentication</del></td>
</tr>
<tr>
<td>Трейт</td>
<td>прилагательное</td>
<td>Notifiable</td>
<td><del>NotificationTrait</del></td>
</tr>
</tbody>
</table>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-короткий-и-читаемый-синтаксис-там-где-это-возможно" class="anchor" aria-hidden="true" href="#короткий-и-читаемый-синтаксис-там-где-это-возможно"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Короткий и читаемый синтаксис там, где это возможно</strong></h3>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-en">session</span>()-&gt;<span class="pl-en">get</span>(<span class="pl-s">'cart'</span>);
<span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-en">input</span>(<span class="pl-s">'name'</span>);</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="$request->session()->get('cart');
$request->input('name');
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-en">session</span>(<span class="pl-s">'cart'</span>);
<span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-c1">name</span>;</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="session('cart');
$request->name;
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Еще примеры:</p>
<table>
<thead>
<tr>
<th>Часто используемый синтаксис</th>
<th>Более короткий и читаемый синтаксис</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>Session::get('cart')</code></td>
<td><code>session('cart')</code></td>
</tr>
<tr>
<td><code>$request-&gt;session()-&gt;get('cart')</code></td>
<td><code>session('cart')</code></td>
</tr>
<tr>
<td><code>Session::put('cart', $data)</code></td>
<td><code>session(['cart' =&gt; $data])</code></td>
</tr>
<tr>
<td><code>$request-&gt;input('name'), Request::get('name')</code></td>
<td><code>$request-&gt;name, request('name')</code></td>
</tr>
<tr>
<td><code>return Redirect::back()</code></td>
<td><code>return back()</code></td>
</tr>
<tr>
<td><code>is_null($object-&gt;relation) ? null : $object-&gt;relation-&gt;id</code></td>
<td><code>optional($object-&gt;relation)-&gt;id</code></td>
</tr>
<tr>
<td><code>return view('index')-&gt;with('title', $title)-&gt;with('client', $client)</code></td>
<td><code>return view('index', compact('title', 'client'))</code></td>
</tr>
<tr>
<td><code>$request-&gt;has('value') ? $request-&gt;value : 'default';</code></td>
<td><code>$request-&gt;get('value', 'default')</code></td>
</tr>
<tr>
<td><code>Carbon::now(), Carbon::today()</code></td>
<td><code>now(), today()</code></td>
</tr>
<tr>
<td><code>App::make('Class')</code></td>
<td><code>app('Class')</code></td>
</tr>
<tr>
<td><code>-&gt;where('column', '=', 1)</code></td>
<td><code>-&gt;where('column', 1)</code></td>
</tr>
<tr>
<td><code>-&gt;orderBy('created_at', 'desc')</code></td>
<td><code>-&gt;latest()</code></td>
</tr>
<tr>
<td><code>-&gt;orderBy('age', 'desc')</code></td>
<td><code>-&gt;latest('age')</code></td>
</tr>
<tr>
<td><code>-&gt;orderBy('created_at', 'asc')</code></td>
<td><code>-&gt;oldest()</code></td>
</tr>
<tr>
<td><code>-&gt;select('id', 'name')-&gt;get()</code></td>
<td><code>-&gt;get(['id', 'name'])</code></td>
</tr>
<tr>
<td><code>-&gt;first()-&gt;name</code></td>
<td><code>-&gt;value('name')</code></td>
</tr>
</tbody>
</table>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-используйте-ioc-или-фасады-вместо-new-class" class="anchor" aria-hidden="true" href="#используйте-ioc-или-фасады-вместо-new-class"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Используйте IoC или фасады вместо new Class</strong></h3>
<p>Внедрение классов через синтаксис new Class создает сильное сопряжение между частями приложения и усложняет тестирование. Используйте контейнер или фасады.</p>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-s1"><span class="pl-c1">$</span>user</span> = <span class="pl-k">new</span> <span class="pl-v">User</span>;
<span class="pl-s1"><span class="pl-c1">$</span>user</span>-&gt;<span class="pl-en">create</span>(<span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-en">validated</span>());</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="$user = new User;
$user->create($request->validated());
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">__construct</span>(<span class="pl-smi">User</span> <span class="pl-s1"><span class="pl-c1">$</span>user</span>)
{
    <span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">user</span> = <span class="pl-s1"><span class="pl-c1">$</span>user</span>;
}

<span class="pl-c1">.</span>.<span class="pl-c1">.</span>.

<span class="pl-s1"><span class="pl-c1">$</span><span class="pl-smi">this</span></span>-&gt;<span class="pl-c1">user</span>-&gt;<span class="pl-en">create</span>(<span class="pl-s1"><span class="pl-c1">$</span>request</span>-&gt;<span class="pl-en">validated</span>());</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="public function __construct(User $user)
{
$this->user = $user;
}

....

$this->user->create($request->validated());
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-не-работайте-с-данными-из-файла-env-напрямую" class="anchor" aria-hidden="true" href="#не-работайте-с-данными-из-файла-env-напрямую"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Не работайте с данными из файла <code>.env</code> напрямую</strong></h3>
<p>Передайте данные из <code>.env</code> файла в кофигурационный файл и используйте <code>config()</code> в приложении, чтобы использовать эти данными.</p>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-s1"><span class="pl-c1">$</span>apiKey</span> = <span class="pl-en">env</span>(<span class="pl-s">'API_KEY'</span>);</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="$apiKey = env('API_KEY');
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-c">// config/api.php</span>
<span class="pl-s">'key'</span> =&gt; <span class="pl-en">env</span>(<span class="pl-s">'API_KEY'</span>),

<span class="pl-c">// Используйте данные в приложении</span>
<span class="pl-s1"><span class="pl-c1">$</span>apiKey</span> = <span class="pl-en">config</span>(<span class="pl-s">'api.key'</span>);</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="// config/api.php
'key' => env('API_KEY'),

// Используйте данные в приложении
$apiKey = config('api.key');
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-храните-даты-в-стандартном-формате-используйте-читатели-и-преобразователи-для-преобразования-формата" class="anchor" aria-hidden="true" href="#храните-даты-в-стандартном-формате-используйте-читатели-и-преобразователи-для-преобразования-формата"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Храните даты в стандартном формате. Используйте читатели и преобразователи для преобразования формата</strong></h3>
<p>Плохо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre>{{ <span class="pl-v">Carbon</span>::<span class="pl-en">createFromFormat</span>(<span class="pl-s">'Y-d-m H-i'</span>, <span class="pl-s1"><span class="pl-c1">$</span>object</span>-&gt;<span class="pl-c1">ordered_at</span>)-&gt;<span class="pl-en">toDateString</span>() }}
{{ <span class="pl-v">Carbon</span>::<span class="pl-en">createFromFormat</span>(<span class="pl-s">'Y-d-m H-i'</span>, <span class="pl-s1"><span class="pl-c1">$</span>object</span>-&gt;<span class="pl-c1">ordered_at</span>)-&gt;<span class="pl-en">format</span>(<span class="pl-s">'m-d'</span>) }}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="{{ Carbon::createFromFormat('Y-d-m H-i', $object->ordered_at)->toDateString() }}
{{ Carbon::createFromFormat('Y-d-m H-i', $object->ordered_at)->format('m-d') }}
" tabindex="0" role="button">
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
      <svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<p>Хорошо:</p>
<div class="highlight highlight-text-html-php position-relative"><pre><span class="pl-c">// Модель</span>
<span class="pl-k">protected</span> <span class="pl-s1"><span class="pl-c1">$</span>dates</span> = [<span class="pl-s">'ordered_at'</span>, <span class="pl-s">'created_at'</span>, <span class="pl-s">'updated_at'</span>];
<span class="pl-c">// Читатель (accessor)</span>
<span class="pl-k">public</span> <span class="pl-k">function</span> <span class="pl-en">getSomeDateAttribute</span>(<span class="pl-s1"><span class="pl-c1">$</span>date</span>)
{
    <span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span>date</span>-&gt;<span class="pl-en">format</span>(<span class="pl-s">'m-d'</span>);
}

<span class="pl-c">// Шаблон</span>
{{ <span class="pl-s1"><span class="pl-c1">$</span>object</span>-&gt;<span class="pl-c1">ordered_at</span>-&gt;<span class="pl-en">toDateString</span>() }}
{{ <span class="pl-s1"><span class="pl-c1">$</span>object</span>-&gt;<span class="pl-c1">ordered_at</span>-&gt;<span class="pl-c1">some_date</span> }}</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
<clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="// Модель
protected $dates = ['ordered_at', 'created_at', 'updated_at'];
// Читатель (accessor)
public function getSomeDateAttribute($date)
{
return $date->format('m-d');
}

// Шаблон
{{ $object->ordered_at->toDateString() }}
{{ $object->ordered_at->some_date }}
" tabindex="0" role="button">
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-clippy js-clipboard-clippy-icon m-2">
<path fill-rule="evenodd" d="M5.75 1a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75v-3a.75.75 0 00-.75-.75h-4.5zm.75 3V2.5h3V4h-3zm-2.874-.467a.75.75 0 00-.752-1.298A1.75 1.75 0 002 3.75v9.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-9.5a1.75 1.75 0 00-.874-1.515.75.75 0 10-.752 1.298.25.25 0 01.126.217v9.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-9.5a.25.25 0 01.126-.217z"></path>
</svg>
<svg aria-hidden="true" viewBox="0 0 16 16" version="1.1" data-view-component="true" height="16" width="16" class="octicon octicon-check js-clipboard-check-icon color-text-success d-none m-2">
<path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
</clipboard-copy>
  </div></div>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
<h3><a id="user-content-другие-советы-и-практики" class="anchor" aria-hidden="true" href="#другие-советы-и-практики"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg></a><strong>Другие советы и практики</strong></h3>
<p>Не размещайте логику в маршрутах.</p>
<p>Старайтесь не использовать "сырой" PHP в шаблонах Blade.</p>
<p><a href="#%D0%A1%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD%D0%B8%D0%B5"><g-emoji class="g-emoji" alias="top" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"><img class="emoji" alt="top" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f51d.png"></g-emoji> Наверх</a></p>
</article>
