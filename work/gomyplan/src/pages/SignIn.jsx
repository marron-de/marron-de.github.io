import { useState } from "react";
import { Link } from "react-router-dom";
import styled from "styled-components";

// react-bootstrap
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import InputTitle from "../components/InputTitle";
import Input from "../components/Input";
import BigButton from "../components/BigButton";

// img
import LoginFacebook from "../assets/img/login_facebook.png";
import LoginGoogle from "../assets/img/login_google.png";
import LoginKakao from "../assets/img/login_kakao.png";

// style
const JoinBottom = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
`;

const JoinTxt = styled.div`
  width: 100%;
  position: relative;
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-darkgray);
  text-align: center;
  transition: var(--transition);

  &::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    height: 1px;
    background: var(--color-border2);
    transition: var(--transition);
  }

  span {
    position: relative;
    padding: 0px 14px;
    background: var(--color-bg1);
    transition: var(--transition);
    z-index: 10;
  }

  .darkMode &::before {
    background: var(--color-border);
  }

  .darkMode & span {
    background: var(--color-black);
    color: var(--color-border);
  }
`;

const SnsBox = styled.div`
  margin-top: 10px;
  display: flex;
  align-items: center;
  gap: 14px;
`;

const SnsButton = styled.div`
  display: flex;
  align-items: center;
  width: 36px;
  aspect-ratio: 1 / 1;

  img {
    width: 100%;
  }
`;

const FindInfo = styled.div`
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  margin-top: 30px;
  margin-bottom: 10px;

  a {
    display: block;
    font-weight: 400;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-gray);
  }

  .bar {
    width: 1px;
    height: 8px;
    background: var(--color-gray);
  }
`;

const JoinBtnBox = styled.div`
  margin-bottom: 50px;
`;

const SignIn = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const isButtonDisabled = () => {
    // 이메일과 비밀번호가 비어있지 않을 때만 버튼을 활성화
    return email === "" || password === "";
  };

  return (
    <>
      {/* Header */}
      <Header type="title" title="Sign In" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <Form className="formbox">
            <Form.Group className="formitem">
              <InputTitle className="input_title">Email Address</InputTitle>
              <InputGroup>
                <Input placeholder="Email" type="text" value={email} onChange={(e) => setEmail(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Password</InputTitle>
              <InputGroup>
                <Input placeholder="Password" type="password" icon="password" value={password} onChange={(e) => setPassword(e.target.value)} />
              </InputGroup>
            </Form.Group>
          </Form>
          <JoinBottom>
            <JoinTxt>
              <span>Sign In with Social Media Account</span>
            </JoinTxt>
            <SnsBox>
              <SnsButton>
                <img src={LoginFacebook} />
              </SnsButton>
              <SnsButton>
                <img src={LoginGoogle} />
              </SnsButton>
              <SnsButton>
                <img src={LoginKakao} />
              </SnsButton>
            </SnsBox>
          </JoinBottom>
          <FindInfo>
            <Link to="/">Find ID</Link>
            <span className="bar"></span>
            <Link to="/">Find Password</Link>
          </FindInfo>
          <JoinBtnBox>
            <BigButton className="ver2">Create Account</BigButton>
          </JoinBtnBox>          
        </PageContent>
        <PageBtnbox>
          <BigButton disabled={isButtonDisabled()}>Confirm</BigButton>
        </PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default SignIn;
