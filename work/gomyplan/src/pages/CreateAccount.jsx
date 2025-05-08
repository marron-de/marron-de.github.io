import { useState } from "react";
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
import SmallButton from "../components/SmallButton";
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
  padding-bottom: 50px;
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

const CreateAccount = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [confirmPassword, setConfirmPassword] = useState("");

  const isButtonDisabled = () => {
    // 이메일이 비어있지 않고 비밀번호와 확인 비밀번호가 일치할 때만 버튼을 활성화
    return email === "" || password === "" || confirmPassword === "" || password !== confirmPassword;
  };

  return (
    <>
      {/* Header */}
      <Header type="title" title="Create Account" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <Form className="formbox">
            <Form.Group className="formitem">
              <InputTitle className="input_title">Email Address</InputTitle>
              <InputGroup className="flex-row">
                <Input placeholder="Email" type="text" value={email} onChange={(e) => setEmail(e.target.value)} />
                <SmallButton>Verify</SmallButton>
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Create Password</InputTitle>
              <InputGroup>
                <Input placeholder="Password" type="password" icon="password" value={password} onChange={(e) => setPassword(e.target.value)} />
              </InputGroup>
            </Form.Group>

            <Form.Group className="formitem">
              <InputTitle className="input_title">Confirm Password</InputTitle>
              <InputGroup>
                <Input placeholder="Password" type="password" icon="password" value={confirmPassword} onChange={(e) => setConfirmPassword(e.target.value)} />
              </InputGroup>
            </Form.Group>
          </Form>
          <JoinBottom>
            <JoinTxt>
              <span>Connect Social Media Account</span>
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

export default CreateAccount;
