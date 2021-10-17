<?php

class IndexPageTest extends TestCase
{
    private const URI = '/';

    public function testCanSeeIndexPage()
    {
        $this->get(self::URI);

        $this->assertResponseOk();
    }

    public function testCanSeeAuthorName()
    {
        $this->get(self::URI);

        $this->response->assertSee(config('app.author'));
    }

    public function testCanSeeSkills()
    {
        $this->get(self::URI);

        $skills = config('app.skills');

        foreach ($skills as $skill) {
            $this->response->assertSee($skill);
        }
    }
}
