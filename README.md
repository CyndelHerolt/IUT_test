# IUT_test_technique
Symfony Initiation

This website is a technical test in order to -maybe- be recruited by my university for a work-study contract.
It started on june 3rd and must be finished by june 10th.
The instructions were to create a home page as well as a "departments" page using the Symfony framework -*I had never used Symfony before*-.

<h3>Start the project by installing Symfony</h3>

I started by installing **Symfony CLI** and **Profiler** -using a package manager- to create the project and work on it locally, then I checked if everything was OK -*indeed it was*-. 

<code>
  composer require --dev symfony/profiler-pack
</code>
<br>
<code>
  symfony new IUT_test
</code>
  <br>
<code>
  cd C:/MAMP/localweb/IUT_test
</code>
  <br>
<code>
  symfony server:start
</code>

<h3>Project structure discovery on PHPStorm</h3>

At first, this new environment was quite scary as it is unlike anything I have done before. But the **Symfony docs** and the **Symfony Support** pluggin helped me to understand the route and controller system.

<h3>Use table data</h3>

Part of the content of the project had to be extracted from arrays ; so I looped over each item using <code>{% for key in arrayname %}</code> -*I was surprised that it wasn't a <code>foreach</code> like PHP*-.

<h3>Define path</h3>

I defined my links paths using <code>{{ path ('name_in_routes') }}</code> and the image integration path using <code><img src="{{ asset ('image_directory/image_name.jpg') }}" alt="Oups"></img>
