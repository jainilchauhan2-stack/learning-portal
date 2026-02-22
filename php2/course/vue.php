<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vue Full Tutorial</title>
<style>
/* Reset & Body */
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
body {
    background: linear-gradient(135deg, #f4f7f8, #e0e7ea);
    color: #333;
    line-height: 1.6;
}

/* Header */
header {
    background: linear-gradient(135deg, #42b883, #2c3e50);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

header h1 { font-size: 42px; margin-bottom: 10px; }
header p { font-size: 18px; color: #b2f0d1; }

/* Navigation */
nav {
    background: #2c3e50;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    padding: 15px 0;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

nav a {
    color: #fff;
    text-decoration: none;
    padding: 8px 18px;
    font-weight: bold;
    border-radius: 8px;
    transition: 0.3s ease;
}
nav a:hover { background: #42b883; color: #fff; }

/* Sections */
section {
    background: #fff;
    margin: 30px auto;
    padding: 40px 30px;
    border-radius: 16px;
    max-width: 950px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}
section:hover { transform: translateY(-5px); }

section h2 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 15px;
    background: linear-gradient(to right, #42b883, #2c3e50);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

hr {
    border: 0;
    height: 3px;
    background: #2c3e50;
    width: 50%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Code Blocks */
pre {
    background: #f0f4f8;
    border-left: 5px solid #2c3e50;
    padding: 15px;
    overflow-x: auto;
    border-radius: 8px;
    font-family: 'Courier New', monospace;
    box-shadow: inset 0 0 5px rgba(0,0,0,0.05);
}

/* Lists */
ul { padding-left: 25px; margin-top: 10px; }

/* Tables */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
th, td {
    border: 1px solid #2c3e50;
    padding: 12px;
    text-align: left;
    transition: background 0.3s ease;
}
th { background: #2c3e50; color: #fff; }
tr:hover td { background: #b2f0d1; }

/* Footer */
footer {
    background: #2c3e50;
    color: #fff;
    text-align: center;
    padding: 25px 20px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
}

/* Smooth Scroll */
html { scroll-behavior: smooth; }
</style>
</head>
<body>

<header>
    <h1>Vue Full Tutorial</h1>
    <p>Complete Guide to Vue.js Framework</p>
</header>

<nav>
    <a href="#intro">Introduction</a>
    <a href="#features">Features</a>
    <a href="#syntax">Basic Syntax</a>
    <a href="#examples">Examples</a>
    <a href="#history">History</a>
</nav>

<section id="intro">
<h2>Introduction to Vue.js</h2>
<hr>
<p>Vue.js is an open-source JavaScript framework for building user interfaces and single-page applications. It is progressive, flexible, and easy to integrate with other projects and libraries.</p>

<h3>Why Learn Vue.js?</h3>
<ul>
<li>Lightweight and easy to learn</li>
<li>Reactive and component-based architecture</li>
<li>Flexible and integrates with other libraries</li>
<li>Used for modern frontend development</li>
<li>Growing community and ecosystem</li>
</ul>
</section>

<section id="features">
<h2>Features of Vue.js</h2>
<hr>
<ul>
<li>Reactive data binding</li>
<li>Component-based structure</li>
<li>Virtual DOM for performance</li>
<li>Directives like v-if, v-for, v-bind</li>
<li>Computed properties and watchers</li>
<li>Supports routing and state management</li>
</ul>
</section>

<section id="syntax">
<h2>Basic Vue.js Syntax</h2>
<hr>

<p>Example of binding data:</p>
<pre>
&lt;div id="app"&gt;
  &lt;p&gt;{{ message }}&lt;/p&gt;
&lt;/div&gt;

&lt;script&gt;
new Vue({
  el: '#app',
  data: { message: 'Hello Vue!' }
})
&lt;/script&gt;
</pre>

<p>Example of a component:</p>
<pre>
Vue.component('my-component', {
  template: '&lt;div&gt;This is a reusable component&lt;/div&gt;'
});
</pre>
</section>

<section id="examples">
<h2>Example Code Snippets</h2>
<hr>

<p>Conditional rendering and looping:</p>
<pre>
&lt;ul&gt;
  &lt;li v-for="item in items" v-if="item.visible"&gt;
    {{ item.name }}
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
</section>

<section id="history">
<h2>Vue.js History</h2>
<hr>
<table>
<tr><th>Year</th><th>Event</th></tr>
<tr><td>2014</td><td>Vue.js created by Evan You</td></tr>
<tr><td>2016</td><td>Vue 2.0 released with Virtual DOM and components</td></tr>
<tr><td>2020</td><td>Vue 3.0 released with Composition API and improved performance</td></tr>
<tr><td>Present</td><td>Widely used for modern frontend development</td></tr>
</table>
</section>

<footer>
<p>© 2026 Learning Portal | All Rights Reserved</p>
</footer>

</body>
</html>