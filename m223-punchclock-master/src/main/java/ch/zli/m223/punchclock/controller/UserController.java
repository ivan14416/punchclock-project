package ch.zli.m223.punchclock.controller;

import ch.zli.m223.punchclock.domain.ApplicationUser;
import ch.zli.m223.punchclock.service.UserService;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/users")
public class UserController {

    private UserService userService;
    private BCryptPasswordEncoder bCr;

    public UserController(UserService userService, BCryptPasswordEncoder bCr) {
        this.userService = userService;
        this.bCr = bCr;
    }

    @PostMapping("sign-up")
    public void login(@RequestBody ApplicationUser applicationUser) {
        applicationUser.setPassword(bCr.encode(applicationUser.getPassword()));
        userService.createUser(applicationUser);
    }
}
